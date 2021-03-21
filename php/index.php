<?php 
  $response= [
    "message" =>"",
    "data" => $_POST
  ];
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["totalSelect"])) {
      $response["message"] = "Inserire il totale del presito";
      return $response
    }
    if (!isset($_POST["optionWork"])) {
      $response["message"] = "Inserire il tipo di impiego";
      return $response
    }
    if (!isset($_POST["salary"])) {
      $response["message"] = "Inserire il tipo di salario";
      return $response
    }
    if (!isset($_POST["months"])) {
      $response["message"] = "Inserire il tipo di mensilità";
      return $response
    }
    if (!isset($_POST["typeWork"])) {
      $response["message"] = "Inserire il tipo dilavoro";
      return $response
    }
    $to      = 'localhost:8025';
    $subject = 'Send Data';
    $message = 'hello';
    $headers = 'From: ninoc84@@example.com' . "\r\n" .
        'Reply-To: ninoc84@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $send = mail($to, $subject, $message, $headers);
    if($send) {
      $response["message"] = "Dati inviati correttamente";
      var_dump($response);
      return json_encode($response);
    };
    $response["message"] = "Dati non inviati correttamente";
    return json_encode($response);
}

