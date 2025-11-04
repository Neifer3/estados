<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Bollito - Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4e8d1;
      font-family: Arial, sans-serif;
      margin: 0;
      display: flex;
    }
    .sidebar {
      width: 240px;
      background-color: #a0522d;
      height: 100vh;
      color: #fff;
      position: fixed;
      top: 0; left: 0;
      padding: 1rem;
      display: flex;
      flex-direction: column;
    }
    .sidebar h4 {
      font-weight: bold;
      margin-bottom: 2rem;
      text-align: center;
    }
    .sidebar a {
      color: #fff;
      text-decoration: none;
      display: block;
      padding: 10px 15px;
      border-radius: 8px;
      margin-bottom: 5px;
      transition: background 0.2s;
    }
    .sidebar a:hover, .sidebar a.active {
      background-color: #8b4513;
    }
    .content {
      margin-left: 260px;
      padding: 20px;
      flex: 1;
    }
  </style>
</head>
<body>

  <!-- Sidebar principal -->
  <div class="sidebar">
    <h4>Mi Bollito</h4>

    <a href="panel.html"><i class="bi bi-house-door"></i> Inicio</a>
    <a href="inventario.html"><i class="bi bi-box-seam"></i> Inventario</a>
    <a href="estadisticas.html"><i class="bi bi-graph-up"></i> Estadísticas</a>
    <a href="domicilios.html"><i class="bi bi-bicycle"></i> Domicilios</a>
    <a href="estados.html"><i class="bi bi-tags"></i> Estados</a>

    <!-- Sección visible solo para administradores -->
    <div id="adminSection">
      <a href="vendedores.html"><i class="bi bi-truck"></i> Vendedores</a>
      <a href="usuarios.html"><i class="bi bi-people"></i> Usuarios</a>
    </div>

    <div class="mt-auto">
      <hr class="text-light">
      <p class="small mb-1">👤 <strong>Juan Pérez</strong></p>
      <p class="small text-light">administrador</p>
      <a href="logout.html" class="btn btn-light btn-sm w-100 mt-2">
        <i class="bi bi-box-arrow-right"></i> Cerrar sesión
      </a>
    </div>
  </div>

  <!-- Contenido principal -->
  <div class="content">
    <h2>Bienvenido al panel de control</h2>
    <p>Desde aquí puedes gestionar el inventario, estados, domicilios y más.</p>
    <p class="text-muted">Esta es una versión HTML estática (sin PHP ni sesiones activas).</p>
  </div> <!-- content -->

  <!-- Script de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
