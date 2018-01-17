  <?php

  // client.php

  $options = array(
      'uri' => 'http://localhost/namespace',
      'location' => 'http://localhost:8899/server.php',
  );
  $client = new SOAPClient(null, $options);
  echo $client->add(10, 10);

  ?>
