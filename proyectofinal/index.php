<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de matrícula</title>
    <link rel="stylesheet" href="view.css">
</head>
<body>
    <div class="page-shell">
        <header class="app-header">
            <div class="brand">
                <span class="brand-mark">M</span>
                <div>
                    <strong>Matrícula</strong>
                    <small>Proyecto final</small>
                </div>
            </div>
            <a class="button secondary" href="vista.html">Ver vista</a>
        </header>

        <main class="layout">
            <section class="panel hero-panel">
                <span class="eyebrow">Formulario renovado</span>
                <h1>Solicita tu matrícula de forma rápida y clara</h1>
                <p>Selecciona tu carrera, completa tus datos y confirma. El diseño está mejorado para verse moderno y atractivo.</p>
            </section>

            <section class="panel form-panel">
                <h2>Datos del estudiante</h2>
                <form action="procesar.php" method="POST">
                    <div class="field-row">
                        <label>
                            Código de estudiante
                            <input type="text" name="codigo" placeholder="2025-001" required>
                        </label>
                        <label>
                            Nombre completo
                            <input type="text" name="nombre" placeholder="Juan Pérez" required>
                        </label>
                    </div>

                    <div class="field-row">
                        <div class="field-group career-section">
                            <legend>Carrera</legend>
                            <div class="career-grid">
                                <label class="career-card">
                                    <input type="radio" name="carrera" value="Programación" required>
                                    <span>Programación</span>
                                </label>
                                <label class="career-card">
                                    <input type="radio" name="carrera" value="Base de datos">
                                    <span>Base de datos</span>
                                </label>
                                <label class="career-card">
                                    <input type="radio" name="carrera" value="Redes">
                                    <span>Redes</span>
                                </label>
                                <label class="career-card">
                                    <input type="radio" name="carrera" value="Diseño web">
                                    <span>Diseño web</span>
                                </label>
                                <label class="career-card">
                                    <input type="radio" name="carrera" value="Matemática">
                                    <span>Matemática</span>
                                </label>
                                <label class="career-card">
                                    <input type="radio" name="carrera" value="Ingeniería de software">
                                    <span>Ingeniería de software</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="field-row">
                        <label>
                            Ciclo
                            <input type="text" name="ciclo" placeholder="V" required>
                        </label>
                        <label>git
                            Turno
                            <select name="turno" required>
                                <option value="" disabled selected>Seleccione turno</option>
                                <option value="Mañana">Mañana</option>
                                <option value="Tarde">Tarde</option>
                                <option value="Noche">Noche</option>
                            </select>
                        </label>
                    </div>

       git              <div class="field-row">
                        <label>
                            Turno
                            <select name="turno" required>
                                <option value="">Seleccione turno</option>
                                <option value="Mañana">Mañana</option>
                                <option value="Tarde">Tarde</option>
                                <option value="Noche">Noche</option>
                            </select>
                        </label>
                        <label>
                            Cantidad de cursos
                            <input type="number" name="cantidadCursos" min="1" placeholder="6" required>
                        </label>
                    </div>

                    <div class="field-note">
                        <p>Cada curso cuesta <strong>S/ 150</strong>. Conocieminto.</p>
                    </div>

                    <div class="summary-panel">
                        <div>
                            <strong>Valor por curso</strong>
                            <span>S/ 150</span>
                        </div>
                        <div>
                            <strong>Descuento noche</strong>
                            <span>10%</span>
                        </div>
                        <div>
                            <strong>Recargo</strong>
                            <span>5%</span>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit">Enviar solicitud</button>
                    </div>
                </form>
            </section>
        </main>
    </div>
</body>
</html>

  
