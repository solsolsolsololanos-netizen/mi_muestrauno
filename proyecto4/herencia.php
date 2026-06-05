<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agatababank - Ultra Fluid POO Architecture</title>
    <style>  
        /* ===== RESETEO Y CONFIGURACIÓN BASE ===== */
        * {  
            margin: 0;  
            padding: 0;  
            box-sizing: border-box;  
        }  
        
        body {  
            /* Fondo base: Negro absoluto que se funde con un guinda espectral en el centro */
            background: radial-gradient(circle at 50% 50%, #0d0407 0%, #020102 100%);  
            font-family: '-apple-system', BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;  
            min-height: 100vh;  
            display: flex;  
            justify-content: center;  
            align-items: center;  
            padding: 40px 20px;  
            color: #f5f5f5;
            overflow: hidden;
            position: relative;
        }  
        
        /* ===== MOTOR DE AGUA LÍQUIDA AVANZADA (ESTILO PROFESIONAL) ===== */
        .ocean-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #030102; /* Contraste negro puro */
            overflow: hidden;
            z-index: 1;
            pointer-events: none;
        }

        /* Capa 1: Fluido Guinda Profundo (Masa de agua densa inferior) */
        .ocean-wave-1 {
            position: absolute;
            bottom: -40%;
            left: -20%;
            width: 150%;
            height: 120%;
            background: linear-gradient(35deg, rgba(92, 8, 28, 0.35) 0%, rgba(145, 16, 51, 0.15) 40%, transparent 70%);
            border-radius: 47% 43% 45% 40% / 45% 40% 50% 45%;
            animation: professionalFluid 26s infinite alternate cubic-bezier(0.445, 0.05, 0.55, 0.95);
            filter: blur(10px);
        }

        /* Capa 2: Reflejo Oro/Beige Líquido (Efecto de iluminación elegante y sutil) */
        .ocean-wave-2 {
            position: absolute;
            bottom: -35%;
            right: -20%;
            width: 160%;
            height: 120%;
            background: linear-gradient(145deg, transparent 30%, rgba(214, 175, 55, 0.06) 50%, rgba(112, 0, 24, 0.2) 80%, transparent 100%);
            border-radius: 42% 48% 40% 45% / 40% 45% 45% 42%;
            animation: professionalFluid 34s infinite alternate-reverse cubic-bezier(0.39, 0.575, 0.565, 1);
            filter: blur(8px);
        }

        /* Capa 3: Corriente de Intersección Espectral (Fusión Vino y Negro) */
        .ocean-wave-3 {
            position: absolute;
            bottom: -50%;
            left: 5%;
            width: 140%;
            height: 110%;
            background: radial-gradient(ellipse at 50% 80%, rgba(166, 18, 60, 0.25) 0%, rgba(214, 175, 55, 0.02) 50%, transparent 75%);
            border-radius: 50% 40% 46% 41% / 46% 42% 48% 44%;
            animation: professionalFluid 30s infinite alternate cubic-bezier(0.25, 0.46, 0.45, 0.94) 3s;
            filter: blur(12px);
        }

        /* Animación hidrodinámica con transiciones asimétricas complejas */
        @keyframes professionalFluid {
            0% { 
                transform: translateY(0) translateX(0) rotate(0deg) scale(1); 
            }
            33% {
                border-radius: 45% 45% 40% 48% / 42% 40% 48% 45%;
            }
            50% { 
                transform: translateY(-35px) translateX(15px) rotate(4deg) scale(1.02); 
            }
            66% {
                border-radius: 48% 41% 47% 42% / 46% 45% 41% 48%;
            }
            100% { 
                transform: translateY(-10px) translateX(-10px) rotate(8deg) scale(0.98); 
            }
        }
        
        /* ===== CONTENEDOR CRISTALIZADO (GLASSMORPHISM PRESTIGE) ===== */  
        .container {  
            max-width: 650px;  
            width: 100%;  
            background: rgba(10, 5, 7, 0.55); /* Oscurecido para mayor contraste profesional */
            backdrop-filter: blur(30px);
            -webkit-backdrop-filter: blur(30px);
            border: 1px solid rgba(214, 175, 55, 0.15); /* Borde oro fino */
            border-radius: 28px;  
            padding: 55px 45px;  
            box-shadow:   
                0 50px 100px rgba(0, 0, 0, 0.98),
                inset 0 1px 2px rgba(255, 255, 255, 0.05);  
            position: relative;  
            z-index: 2;
            animation: floatCard 9s ease-in-out infinite;
        }  

        @keyframes floatCard {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-7px); }
        }
        
        /* Fina Línea Láser Superior */  
        .container .top-line {  
            position: absolute;  
            top: 0;  
            left: 0;  
            right: 0;  
            height: 3px;  
            background: linear-gradient(90deg, transparent, #800020, #d4af37, #800020, transparent);  
        }  
        
        /* ===== ENCABEZADO ===== */  
        .header {  
            text-align: center;  
            margin-bottom: 40px;  
        }  
        
        .header h2 {
            font-size: 24px;
            font-weight: 500;
            letter-spacing: 2.5px;
            color: #ffffff;
            text-transform: uppercase;
        }

        .header p {
            font-size: 11px;
            color: #d4af37;
            margin-top: 8px;
            letter-spacing: 3.5px;
            text-transform: uppercase;
            opacity: 0.8;
        }

        /* ===== FORMULARIO PREMIUM ===== */
        .input-form {
            display: flex;
            flex-direction: column;
            gap: 18px;
            margin-bottom: 35px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .form-group label {
            font-size: 11px;
            color: #a6a6a6;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .form-group input {
            background: rgba(4, 2, 3, 0.85);
            border: 1px solid rgba(255, 255, 255, 0.04);
            border-radius: 12px;
            padding: 14px 18px;
            color: #ffffff;
            font-size: 14px;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .form-group input:focus {
            outline: none;
            border-color: rgba(214, 175, 55, 0.35);
            background: rgba(4, 2, 3, 0.95);
            box-shadow: 0 0 25px rgba(128, 0, 32, 0.35);
        }

        /* Botón de Acción */
        .submit-btn {
            background: linear-gradient(90deg, #70001c, #911033);
            border: 1px solid rgba(214, 175, 55, 0.15);
            border-radius: 12px;
            padding: 15px;
            color: #ffffff;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 5px;
        }

        .submit-btn:hover {
            border-color: rgba(214, 175, 55, 0.4);
            background: linear-gradient(90deg, #800020, #a6123c);
            box-shadow: 0 8px 30px rgba(128, 0, 32, 0.45);
        } broadcast
        
        /* ===== CONSOLA TERMINAL ===== */
        .output-box {
            background: rgba(2, 1, 2, 0.85);
            border-left: 3px solid #d4af37;
            border-radius: 12px;
            padding: 25px 30px;
            box-shadow: inset 0 2px 20px rgba(0, 0, 0, 0.85);
        }

        .output-box h3 {
            font-size: 11px;
            color: #d4af37;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 18px;
            border-bottom: 1px solid rgba(255,255,255,0.04);
            padding-bottom: 8px;
        }

        .data-line {
            font-family: 'SFMono-Regular', Consolas, monospace;
            font-size: 14px;
            margin-bottom: 12px;
            line-height: 1.6;
            display: flex;
            align-items: center;
        }

        .data-line:last-child {
            margin-bottom: 0;
        }

        .data-line .prefix {
            color: #911033;
            font-weight: bold;
            margin-right: 14px;
        }

        .data-line .content {
            color: #e0e0e0;
        }
    </style>  
</head>
<body>

    <div class="ocean-background">
        <div class="ocean-wave-1"></div>
        <div class="ocean-wave-2"></div>
        <div class="ocean-wave-3"></div>
    </div>

    <div class="container">
        <div class="top-line"></div>
        
        <div class="header">
            <h2>REGISTRO</h2>
            <p></p>
        </div>

        <form class="input-form" method="POST" action="">
            <div class="form-group">
                <label for="nombre">Nombre del Sujeto</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : 'SHanesa'; ?>" required>
            </div>
            <div class="form-group">
                <label for="carrera">Especialidad Profesional</label>
                <input type="text" id="carrera" name="carrera" value="<?php echo isset($_POST['carrera']) ? htmlspecialchars($_POST['carrera']) : 'Abogada'; ?>" required>
            </div>
            <div class="form-group">
                <label for="signo">Firma Astral</label>
                <input type="text" id="signo" name="signo" value="<?php echo isset($_POST['signo']) ? htmlspecialchars($_POST['signo']) : 'Piscis'; ?>" required>
            </div>
            <button type="submit" class="submit-btn"> Guardar</button>
        </form>

        <div class="output-box">
            <h3>Runtime Core Output</h3>
            <?php
            // 1. Clase Padre Base
            class Persona {
                public $nombre;
                public function saludar() {
                    return "Hola, soy: " . $this->nombre;
                }
            }

            // 2. Clase Hija
            class Estudiante extends Persona {
                public $carrera;
                public function estudiar() {
                    return "Estoy estudiando: " . $this->carrera;
                }
            }

            // 3. Clase Nieto Final
            class PerfilCompleto extends Estudiante {
                public $signo;
                public function zodiacal() {
                    return "Mi signo es: " . $this->signo;
                }
            }

            // Captura de datos segura por POST
            $inputNombre  = isset($_POST['nombre'])  ? htmlspecialchars($_POST['nombre'])  : "SHanesa";
            $inputCarrera = isset($_POST['carrera']) ? htmlspecialchars($_POST['carrera']) : "Abogada";
            $inputSigno   = isset($_POST['signo'])   ? htmlspecialchars($_POST['signo'])   : "Piscis";

            // Instancia POO en memoria real
            $alumno = new PerfilCompleto();
            $alumno->nombre  = $inputNombre;
            $alumno->carrera = $inputCarrera;
            $alumno->signo   = $inputSigno;

            // Inyección limpia en los bloques de la terminal
            echo "<div class='data-line'><span class='prefix'>■</span><span class='content'>" . $alumno->saludar() . "</span></div>";
            echo "<div class='data-line'><span class='prefix'>■</span><span class='content'>" . $alumno->estudiar() . "</span></div>";
            echo "<div class='data-line'><span class='prefix'>■</span><span class='content'>" . $alumno->zodiacal() . "</span></div>";
            ?>
        </div>
    </div>
    
</body>
</html>