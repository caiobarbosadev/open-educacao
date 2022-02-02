<?php

echo ('
<header>
  <nav>
    <a class="logo" href="../views/student-area.php"><h2>Open Educação</h2></a>
    <button class="hamburguer" id="hamburguer">
      <i class="fas fa-bars"></i>
    </button>
    <ul class="nav-ul" id="nav-ul">
      <li><a href="../views/student-area.php">Home</a></li>
      <li><a href="../views/student-area.php#available-courses">Cursos</a></li>
      <li><a href="../views/send-course.php">Enviar</a></li>
      <li><a href="#">Reportar</a></li>
      <li style="margin-bottom: 0px;"><a class="quit-button" href="../models/sair.php">Sair</a></li>
    </ul>
  </nav>
</header>
');
