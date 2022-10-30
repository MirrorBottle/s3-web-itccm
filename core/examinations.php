<?php

require_once('functions.php');


function examination_list($extra_query = '', $options = [])
{
  $examinations = query("
    SELECT
      examinations.*,
      standards.name as standard_name,
      companies.registration_number as registration_number,
      companies.name as company_name
    FROM examinations
    JOIN standards ON examinations.standard_id = standards.id
    JOIN companies ON examinations.company_id = companies.id
    {$extra_query}
    ORDER BY examinations.id DESC
  ");

  foreach ($examinations as $examination) {

    if (isset($options['with_auditors'])) {
      $auditors = query("SELECT
          DISTINCT examination_auditors.auditor_id as id,
          CONCAT(auditors.first_name, ' ', auditors.last_name) as name
        FROM examination_auditors
        JOIN auditors ON examination_auditors.auditor_id = auditors.id
        WHERE examination_id={$examination->id}");
      $examination->auditors = $auditors;
    }

    if (isset($options['with_schedules'])) {
      $schedules = query("SELECT
          examination_auditors.id as examination_auditor_id,
          examination_auditors.auditor_id as auditor_id,
          CONCAT(auditors.first_name, ' ', auditors.last_name) as auditor_name,
          examination_auditors.start_date as start_date,
          examination_auditors.end_date as end_date,
          examination_auditors.position as position
        FROM examination_auditors
        JOIN auditors ON examination_auditors.auditor_id = auditors.id
        WHERE examination_id={$examination->id}");
      $examination->schedules = $schedules;
    }

    if (isset($options['with_scopes'])) {
      $scopes = query("SELECT
          examination_scopes.id as examination_scope_id,
          scopes.id as scope_id,
          scopes.code as scope_code,
          scopes.name as scope_name
        FROM examination_scopes
        JOIN scopes ON examination_scopes.scope_id = scopes.id
        WHERE examination_id={$examination->id}
      ");
      $examination->scopes = $scopes;
    }

    if (isset($options['with_documents'])) {
      $documents = query("SELECT * FROM examination_documents WHERE examination_id={$examination->id}");
      $examination->documents = $documents;
    }

    $examination->status_label = [
      '1' => 'Registrasi',
      '2' => 'Penjadwalan',
      '3' => 'Proses',
      '4' => 'Selesai'
    ][$examination->status];
  }

  return $examinations;
}

function examination_show($id)
{
  $examinations = examination_list("WHERE examinations.id = $id", [
    'with_auditors' => true,
    'with_scopes' => true,
    'with_documents' => true
  ]);
  return empty($examinations) ? [] : $examinations[0];
}
