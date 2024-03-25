<?php

require_once('../../config.php');

// The `id` parameter is the course id.
$id = required_param('id', PARAM_INT);

// Fetch the requested course.
$course = $DB->get_record('course', ['id'=> $id], '*', MUST_EXIST);

// Require that the user is logged into the course.
require_course_login($course);

$modinfo = get_fast_modinfo($course);
