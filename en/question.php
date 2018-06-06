<?php

  $questions = array(                                               
   "What is the result of 8 + four (only digits)",
   "Can you live on sun (yes or no)",
   "Is the earth flat",
   "What is the result of two plus six (use digits)",
   "What is the name of popular alcoholic drink which first letter is b",
   "Number of current century",
   "What is the result of 2 multiple seven",
   "Can dogs fly (yes or no)",
   "Can humans eat cheese",
   "What is the name of the gas mixture everyone is using to breath"
  );
  
  $answears = array(   
  "12",
  "no",
  "no",
  "8",
  "beer",
  "21",
  "14",
  "no",
  "yes",
  "air"
  );
  
  $questionIndex = rand(0,9);               
  $question = $questions[$questionIndex];
  session_start();
  
  $_SESSION['answear'] = $answears[$questionIndex];
  
?>