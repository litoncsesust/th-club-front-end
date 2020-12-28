<?php
add_action('init', 'startSession', 1);

function startSession() {
  if (!session_id()){session_start();}
}