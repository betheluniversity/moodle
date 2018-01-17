  <?php

  // server.php

  class MyService
  {
      public function add($x, $y)
      {
          return $x + $y;
      }
  }

  $options = array(
      'uri' => 'http://localhost/namespace',
      'location' => 'http://localhost:8899/server.php',
  );

  $server = new SOAPServer(null, $options);
  $server->setObject(new MyService());
  $server->handle();

  ?>
