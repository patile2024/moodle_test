<?php
require('../../config.php');

$id = required_param('id', PARAM_INT);
[$course, $cm] = get_course_and_cm_from_cmid($id, 'exercise');
$instance = $DB->get_record('exercise', ['id'=> $cm->instance], '*', MUST_EXIST);