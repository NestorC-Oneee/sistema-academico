<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOLFTEAM | Iniciar sesión</title>

    <!-- Fuentes Gamer / Tactical -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800;900&family=Rajdhani:wght@500;600;700&display=swap" rel="stylesheet">

    <style>
        /* =========================================================
           RESET & RECURSOS GLOBALES
        ========================================================= */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            user-select: none;
            -webkit-user-select: none;
        }

        :root {
            --bg-dark: #050811;
            --panel-bg: rgba(10, 16, 30, 0.75);
            --panel-border: rgba(0, 240, 255, 0.3);
            --cyan-glow: #00f0ff;
            --cyan-dim: rgba(0, 240, 255, 0.2);
            --red-glow: #ff2a5f;
            --red-dim: rgba(ff, 42, 95, 0.2);
            --green-glow: #00ff66;
            --text-main: #e2f1ff;
            --text-muted: #6b86a0;
            --font-title: 'Orbitron', sans-serif;
            --font-body: 'Rajdhani', sans-serif;
        }

        body {
            background-color: var(--bg-dark);
            color: var(--text-main);
            font-family: var(--font-body);
            height: 100vh;
            width: 100vw;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* =========================================================
           FONDO ANIMADO Y EFECTOS VISUALES
        ========================================================= */
        .wolf-login-container {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background: radial-gradient(circle at 50% 30%, #0d1b2a 0%, #050811 80%);
            overflow: hidden;
        }

        /* Malla Táctica de fondo */
        .grid-background {
            position: absolute;
            inset: 0;
            background-image: 
                linear-gradient(rgba(0, 240, 255, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 240, 255, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
            pointer-events: none;
            z-index: 1;
        }

        /* 🌕 LUNA GRANDE EN EL FONDO */
        .moon {
            position: absolute;
            top: -100px;
            left: 50%;
            transform: translateX(-50%);
            width: 650px;
            height: 650px;
            border-radius: 50%;
            background: radial-gradient(circle at 35% 35%, #ffffff 0%, #cbd5e1 40%, #64748b 70%, #1e293b 100%);
            box-shadow: 
                0 0 60px rgba(255, 255, 255, 0.4),
                0 0 120px rgba(0, 240, 255, 0.3),
                0 0 200px rgba(0, 240, 255, 0.15);
            opacity: 0.85;
            pointer-events: none;
            z-index: 2;
        }

        /* Cráteres de la luna con sombras */
        .moon::before {
            content: '';
            position: absolute;
            top: 25%;
            left: 20%;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: rgba(71, 85, 105, 0.25);
            box-shadow: 
                inset 4px 4px 10px rgba(0, 0, 0, 0.4),
                180px 80px 0 30px rgba(71, 85, 105, 0.2),
                90px 220px 0 -10px rgba(71, 85, 105, 0.25),
                260px 200px 0 15px rgba(71, 85, 105, 0.15);
        }

        /* 🔵 ILUMINACIÓN AZUL Y 🔴 ILUMINACIÓN ROJA */
        .light {
            position: absolute;
            border-radius: 50%;
            filter: blur(100px);
            pointer-events: none;
            z-index: 3;
        }

        .light-blue {
            width: 600px;
            height: 600px;
            background: rgba(0, 240, 255, 0.18);
            top: -100px;
            left: -150px;
            animation: pulse-blue 8s infinite alternate ease-in-out;
        }

        .light-red {
            width: 550px;
            height: 550px;
            background: rgba(255, 42, 95, 0.15);
            bottom: -150px;
            right: -100px;
            animation: pulse-red 7s infinite alternate ease-in-out;
        }

        @keyframes pulse-blue {
            0% { transform: scale(1) translate(0, 0); opacity: 0.15; }
            100% { transform: scale(1.2) translate(50px, 30px); opacity: 0.25; }
        }

        @keyframes pulse-red {
            0% { transform: scale(1) translate(0, 0); opacity: 0.12; }
            100% { transform: scale(1.25) translate(-40px, -40px); opacity: 0.22; }
        }

        /* 🌫️ HUMO ANIMADO */
        .smoke-container {
            position: absolute;
            inset: 0;
            pointer-events: none;
            z-index: 4;
            overflow: hidden;
        }

        .smoke {
            position: absolute;
            width: 200%;
            height: 100%;
            background: radial-gradient(ellipse at center, rgba(255,255,255,0.03) 0%, rgba(0,0,0,0) 70%);
            filter: blur(40px);
        }

        .smoke-one {
            top: 20%;
            animation: move-smoke 28s infinite linear;
        }

        .smoke-two {
            top: -10%;
            animation: move-smoke 42s infinite linear reverse;
            opacity: 0.7;
        }

        @keyframes move-smoke {
            0% { transform: translateX(-50%); }
            100% { transform: translateX(0%); }
        }

        /* Scanlines militares de la pantalla */
        .scanline {
            position: absolute;
            inset: 0;
            background: linear-gradient(
                rgba(18, 16, 16, 0) 50%, 
                rgba(0, 0, 0, 0.25) 50%
            );
            background-size: 100% 4px;
            pointer-events: none;
            z-index: 10;
            opacity: 0.6;
        }

        /* =========================================================
           BARRA SUPERIOR (HEADER)
        ========================================================= */
        .top-bar {
            position: relative;
            z-index: 20;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background: linear-gradient(180deg, rgba(5,8,17,0.9) 0%, rgba(5,8,17,0) 100%);
        }

        .game-logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .wolf-symbol {
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, var(--cyan-glow), #0066ff);
            color: #000;
            font-family: var(--font-title);
            font-weight: 900;
            font-size: 28px;
            display: flex;
            justify-content: center;
            align-items: center;
            clip-path: polygon(20% 0%, 80% 0%, 100% 20%, 100% 80%, 80% 100%, 20% 100%, 0% 80%, 0% 20%);
            box-shadow: 0 0 15px var(--cyan-glow);
        }

        .game-logo h1 {
            font-family: var(--font-title);
            font-size: 26px;
            font-weight: 900;
            letter-spacing: 3px;
            color: #fff;
            text-shadow: 0 0 10px rgba(255,255,255,0.5);
        }

        .game-logo h1 span {
            color: var(--cyan-glow);
            text-shadow: 0 0 12px var(--cyan-glow);
        }

        .game-logo small {
            display: block;
            font-size: 10px;
            color: var(--text-muted);
            letter-spacing: 4px;
            margin-top: -3px;
        }

        .server-status {
            font-family: var(--font-title);
            font-size: 12px;
            letter-spacing: 2px;
            color: var(--cyan-glow);
            display: flex;
            align-items: center;
            gap: 10px;
            background: rgba(0, 240, 255, 0.08);
            padding: 8px 16px;
            border: 1px solid var(--panel-border);
            clip-path: polygon(10px 0, 100% 0, 100% calc(100% - 10px), calc(100% - 10px) 100%, 0 100%, 0 10px);
        }

        .status-dot {
            width: 8px;
            height: 8px;
            background-color: var(--green-glow);
            border-radius: 50%;
            box-shadow: 0 0 10px var(--green-glow);
            animation: blink 1.5s infinite alternate;
        }

        @keyframes blink {
            0% { opacity: 0.3; }
            100% { opacity: 1; }
        }

        /* =========================================================
           CONTENIDO PRINCIPAL & PANEL DERECHO DE LOGIN
        ========================================================= */
        .login-area {
            position: relative;
            z-index: 20;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 40px;
        }

        /* Lado Izquierdo: Información Táctica */
        .intro {
            max-width: 500px;
        }

        .classification {
            font-family: var(--font-title);
            font-size: 12px;
            color: var(--red-glow);
            letter-spacing: 3px;
            margin-bottom: 12px;
            display: inline-block;
            background: var(--red-dim);
            padding: 4px 12px;
            border-left: 3px solid var(--red-glow);
        }

        .intro h2 {
            font-family: var(--font-title);
            font-size: 46px;
            font-weight: 900;
            line-height: 1.1;
            letter-spacing: 2px;
            color: #fff;
            margin-bottom: 15px;
            text-shadow: 0 0 20px rgba(0,0,0,0.8);
        }

        .intro h2 strong {
            color: var(--cyan-glow);
            display: block;
            text-shadow: 0 0 15px var(--cyan-glow);
        }

        .intro p {
            font-size: 18px;
            color: #b0c4de;
            line-height: 1.5;
            margin-bottom: 25px;
        }

        .line-decoration {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 25px;
        }

        .line-decoration span {
            height: 2px;
            background: var(--panel-border);
            flex-grow: 1;
        }

        .line-decoration i {
            width: 8px;
            height: 8px;
            background: var(--cyan-glow);
            transform: rotate(45deg);
        }

        .mission-data {
            display: flex;
            gap: 25px;
        }

        .mission-data div {
            border-left: 2px solid var(--panel-border);
            padding-left: 12px;
        }

        .mission-data small {
            display: block;
            font-size: 11px;
            color: var(--text-muted);
            letter-spacing: 2px;
        }

        .mission-data strong {
            font-family: var(--font-title);
            font-size: 16px;
            color: var(--text-main);
        }

        /* 🎮 ESTÉICA MILITAR/GAMER - PANEL DE LOGIN */
        .login-panel {
            width: 420px;
            background: var(--panel-bg);
            backdrop-filter: blur(12px);
            border: 1px solid var(--panel-border);
            padding: 35px 30px;
            clip-path: polygon(
                20px 0, 100% 0, 
                100% calc(100% - 20px), calc(100% - 20px) 100%, 
                0 100%, 0 20px
            );
            box-shadow: 
                0 20px 50px rgba(0, 0, 0, 0.8),
                inset 0 0 20px rgba(0, 240, 255, 0.05);
            position: relative;
        }

        .login-panel::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, var(--cyan-glow), var(--red-glow));
        }

        .panel-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
        }

        .panel-icon {
            width: 40px;
            height: 40px;
            background: var(--cyan-dim);
            border: 1px solid var(--cyan-glow);
            color: var(--cyan-glow);
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: var(--font-title);
            font-weight: 800;
            font-size: 20px;
        }

        .panel-header span {
            font-family: var(--font-title);
            font-size: 10px;
            letter-spacing: 3px;
            color: var(--cyan-glow);
            display: block;
        }

        .panel-header h3 {
            font-family: var(--font-title);
            font-size: 20px;
            font-weight: 800;
            letter-spacing: 1px;
            color: #fff;
        }

        /* CAMPOS DE FORMULARIO (USUARIO Y CONTRASEÑA) */
        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            font-family: var(--font-title);
            font-size: 11px;
            letter-spacing: 2px;
            color: var(--text-muted);
            margin-bottom: 8px;
        }

        .input-box {
            position: relative;
            display: flex;
            align-items: center;
            background: rgba(5, 10, 20, 0.8);
            border: 1px solid rgba(0, 240, 255, 0.2);
            transition: all 0.3s ease;
        }

        .input-box:focus-within {
            border-color: var(--cyan-glow);
            box-shadow: 0 0 15px rgba(0, 240, 255, 0.3);
            background: rgba(5, 10, 20, 0.95);
        }

        .input-icon {
            padding: 0 12px;
            font-size: 16px;
            opacity: 0.7;
        }

        .input-box input {
            width: 100%;
            background: transparent;
            border: none;
            outline: none;
            padding: 14px 10px 14px 0;
            color: #fff;
            font-family: var(--font-body);
            font-size: 16px;
            font-weight: 600;
        }

        .input-box input::placeholder {
            color: #4a5d73;
            font-weight: 500;
        }

        /* 👁️ MOSTRAR/OCULTAR CONTRASEÑA */
        .password-toggle {
            background: transparent;
            border: none;
            color: var(--text-muted);
            padding: 0 15px;
            cursor: pointer;
            font-size: 16px;
            transition: color 0.3s;
        }

        .password-toggle:hover {
            color: var(--cyan-glow);
        }

        /* OPCIONES: RECORDARME Y OLVIDÉ MI CONTRASEÑA */
        .login-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 22px;
            font-size: 14px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            color: var(--text-muted);
        }

        .remember input {
            display: none;
        }

        .remember .checkmark {
            width: 16px;
            height: 16px;
            border: 1px solid var(--panel-border);
            background: rgba(0,0,0,0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.2s;
        }

        .remember input:checked + .checkmark {
            background: var(--cyan-glow);
            border-color: var(--cyan-glow);
            box-shadow: 0 0 8px var(--cyan-glow);
        }

        .remember input:checked + .checkmark::after {
            content: '✓';
            color: #000;
            font-size: 12px;
            font-weight: bold;
        }

        .login-options a {
            color: var(--text-muted);
            text-decoration: none;
            transition: color 0.3s;
            font-size: 13px;
        }

        .login-options a:hover {
            color: var(--cyan-glow);
            text-shadow: 0 0 8px var(--cyan-glow);
        }

        /* 🔵 BOTÓN INGRESAR AL COMBATE CON ⚡ EFECTO NEÓN */
        .login-button {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #0077ff 0%, #00d4ff 100%);
            border: none;
            color: #000;
            font-family: var(--font-title);
            font-size: 15px;
            font-weight: 900;
            letter-spacing: 2px;
            cursor: pointer;
            clip-path: polygon(12px 0, 100% 0, 100% calc(100% - 12px), calc(100% - 12px) 100%, 0 100%, 0 12px);
            transition: all 0.3s ease;
            box-shadow: 0 0 20px rgba(0, 212, 255, 0.4);
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 35px var(--cyan-glow);
            background: linear-gradient(135deg, #00d4ff 0%, #ffffff 100%);
        }

        .login-button:active {
            transform: translateY(1px);
        }

        .login-button.loading {
            background: linear-gradient(135deg, #2b3a4a 0%, #1a2533 100%);
            color: var(--cyan-glow);
            box-shadow: none;
            cursor: wait;
        }

        /* ✅ ESTADO AUTORIZADO */
        .login-button.success-button {
            background: linear-gradient(135deg, #00ff66 0%, #00b347 100%);
            color: #000;
            box-shadow: 0 0 30px var(--green-glow);
        }

        /* MENSAJE DE VALIDACIÓN Y ERROR */
        .login-message {
            margin-top: 15px;
            padding: 10px;
            font-size: 13px;
            font-weight: 600;
            text-align: center;
            display: none;
            clip-path: polygon(8px 0, 100% 0, 100% calc(100% - 8px), calc(100% - 8px) 100%, 0 100%, 0 8px);
        }

        .login-message.error {
            display: block;
            background: rgba(255, 42, 95, 0.15);
            border: 1px solid var(--red-glow);
            color: var(--red-glow);
            animation: shake 0.4s ease-in-out;
        }

        .login-message.success {
            display: block;
            background: rgba(0, 255, 102, 0.15);
            border: 1px solid var(--green-glow);
            color: var(--green-glow);
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            20%, 60% { transform: translateX(-6px); }
            40%, 80% { transform: translateX(6px); }
        }

        /* SEPARADOR SOCIAL */
        .social-divider {
            display: flex;
            align-items: center;
            margin: 22px 0 18px 0;
            gap: 10px;
        }

        .social-divider span {
            height: 1px;
            background: rgba(0, 240, 255, 0.2);
            flex-grow: 1;
        }

        .social-divider p {
            font-family: var(--font-title);
            font-size: 10px;
            color: var(--text-muted);
            letter-spacing: 2px;
        }

        /* REDES SOCIALES (GOOGLE, FACEBOOK, STEAM) */
        .social-login {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .social-button {
            background: rgba(15, 23, 42, 0.8);
            border: 1px solid var(--panel-border);
            color: var(--text-main);
            padding: 10px 5px;
            font-family: var(--font-body);
            font-weight: 700;
            font-size: 13px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 6px;
            transition: all 0.3s;
        }

        .social-button:hover {
            border-color: var(--cyan-glow);
            background: rgba(0, 240, 255, 0.12);
            color: #fff;
            box-shadow: 0 0 12px rgba(0, 240, 255, 0.2);
        }

        /* REGISTRO DE CUENTA */
        .register {
            margin-top: 22px;
            text-align: center;
            font-size: 13px;
            color: var(--text-muted);
        }

        .register a {
            color: var(--cyan-glow);
            font-weight: 700;
            text-decoration: none;
            margin-left: 6px;
            letter-spacing: 1px;
            transition: all 0.3s;
        }

        .register a:hover {
            text-shadow: 0 0 10px var(--cyan-glow);
        }

        /* =========================================================
           BARRA INFERIOR DE CONTROLES (FOOTER)
        ========================================================= */
        .bottom-bar {
            position: relative;
            z-index: 20;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background: linear-gradient(0deg, rgba(5,8,17,0.95) 0%, rgba(5,8,17,0) 100%);
        }

        .copyright {
            font-size: 12px;
            color: var(--text-muted);
            letter-spacing: 1px;
        }

        .quick-controls {
            display: flex;
            gap: 15px;
        }

        /* 🏠 INICIO, 🔊 SONIDO, ⚙️ AJUSTES */
        .quick-controls button {
            background: rgba(10, 16, 30, 0.8);
            border: 1px solid var(--panel-border);
            color: var(--text-main);
            padding: 8px 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            font-family: var(--font-title);
            font-size: 11px;
            letter-spacing: 1px;
            transition: all 0.3s;
            clip-path: polygon(8px 0, 100% 0, 100% calc(100% - 8px), calc(100% - 8px) 100%, 0 100%, 0 8px);
        }

        .quick-controls button:hover {
            border-color: var(--cyan-glow);
            background: var(--cyan-dim);
            color: #fff;
            box-shadow: 0 0 15px var(--cyan-dim);
        }

        .version {
            font-family: var(--font-title);
            font-size: 11px;
            color: var(--text-muted);
            letter-spacing: 2px;
        }

        /* =========================================================
           VENTANAS MODALES (MODAL OVERLAYS)
        ========================================================= */
        .modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(2, 5, 12, 0.85);
            backdrop-filter: blur(8px);
            z-index: 100;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        .modal-overlay.active {
            opacity: 1;
            pointer-events: auto;
        }

        .modal-card {
            width: 450px;
            background: var(--panel-bg);
            border: 1px solid var(--panel-border);
            padding: 30px;
            clip-path: polygon(20px 0, 100% 0, 100% calc(100% - 20px), calc(100% - 20px) 100%, 0 100%, 0 20px);
            box-shadow: 0 0 40px rgba(0, 240, 255, 0.2);
            position: relative;
        }

        .modal-card h3 {
            font-family: var(--font-title);
            color: var(--cyan-glow);
            font-size: 20px;
            margin-bottom: 15px;
            letter-spacing: 2px;
        }

        .modal-card p {
            color: #b0c4de;
            font-size: 15px;
            margin-bottom: 20px;
        }

        .modal-actions {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            margin-top: 20px;
        }

        .btn-cancel {
            background: transparent;
            border: 1px solid var(--text-muted);
            color: var(--text-muted);
            padding: 10px 20px;
            cursor: pointer;
            font-family: var(--font-title);
            font-size: 12px;
            transition: all 0.3s;
        }

        .btn-cancel:hover {
            color: #fff;
            border-color: #fff;
        }

        .btn-confirm {
            background: var(--cyan-glow);
            border: none;
            color: #000;
            padding: 10px 20px;
            cursor: pointer;
            font-family: var(--font-title);
            font-size: 12px;
            font-weight: 800;
            transition: all 0.3s;
        }

        .btn-confirm:hover {
            box-shadow: 0 0 15px var(--cyan-glow);
        }

        /* =========================================================
           📱 DISEÑO RESPONSIVE PARA CELULAR
        ========================================================= */
        @media (max-width: 960px) {
            .intro {
                display: none; /* Oculta la columna de texto de misión en celulares */
            }

            .login-area {
                justify-content: center;
                padding: 0 20px;
            }

            .login-panel {
                width: 100%;
                max-width: 400px;
            }

            .moon {
                width: 450px;
                height: 450px;
                top: -80px;
            }

            .top-bar, .bottom-bar {
                padding: 15px 20px;
            }

            .copyright {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .game-logo h1 {
                font-size: 20px;
            }

            .server-status {
                font-size: 10px;
                padding: 6px 10px;
            }

            .social-login {
                grid-template-columns: 1fr;
            }

            .quick-controls button small {
                display: none;
            }
        }
    </style>
</head>

<body>

    <div class="wolf-login-container">

        <!-- Malla Táctica y Scanlines -->
        <div class="grid-background"></div>
        <div class="scanline"></div>

        <!-- 🌕 LUNA GRANDE -->
        <div class="moon"></div>

        <!-- 🔵 ILUMINACIÓN AZUL Y 🔴 ILUMINACIÓN ROJA -->
        <div class="light light-blue"></div>
        <div class="light light-red"></div>

        <!-- 🌫️ HUMO ANIMADO -->
        <div class="smoke-container">
            <div class="smoke smoke-one"></div>
            <div class="smoke smoke-two"></div>
        </div>

        <!-- =========================================================
           BARRA SUPERIOR (HEADER)
        ========================================================= -->
        <header class="top-bar">
            <div class="game-logo">
                <span class="wolf-symbol">W</span>
                <div>
                    <h1>WOLF<span>TEAM</span></h1>
                    <small>TACTICAL COMBAT UNIT</small>
                </div>
            </div>

            <div class="server-status">
                <span class="status-dot"></span>
                SERVIDOR ONLINE
            </div>
        </header>

        <!-- =========================================================
           CONTENIDO PRINCIPAL
        ========================================================= -->
        <main class="login-area">

            <!-- Lado Izquierdo: Misión y Lore (Visión en PC) -->
            <section class="intro">
                <div class="classification">Oneee // WT-2026</div>
                <h2>Bienvenido <strong>Oneee</strong></h2>
                <p>Prepárate para entrar al campo de batalla tactical. Forma parte de la unidad especial de licántropos y domina la noche.</p>

                <div class="line-decoration">
                    <span></span>
                    <i></i>
                    <span></span>
                </div>

                <div class="mission-data">
                    <div>
                        <small>MISSION</small>
                        <strong>TACTICAL combat</strong>
                    </div>
                    <div>
                        <small>STATUS</small>
                        <strong>READY TO DEPLOY</strong>
                    </div>
                    <div>
                        <small>ZONE</small>
                        <strong>ALPHA SERVER</strong>
                    </div>
                </div>
            </section>

            <!-- 🎮 PANEL DE LOGIN PRINCIPAL -->
            <section class="login-panel">
                <div class="panel-header">
                    <div class="panel-icon">W</div>
                    <div>
                        <span>WOLFTEAM combat</span>
                        <h3>INICIAR SESIÓN</h3>
                    </div>
                </div>

                <form id="loginForm" onsubmit="handleLogin(event)">

                    <!-- 👤 CAMPO DE USUARIO -->
                    <div class="input-group">
                        <label for="username">IDENTIFICACIÓN DE OPERATIVO</label>
                        <div class="input-box">
                            <span class="input-icon">👤</span>
                            <input type="text" id="username" placeholder="Ingresa tu usuario" autocomplete="username">
                        </div>
                    </div>

                    <!-- 🔒 CAMPO DE CONTRASEÑA Y 👁️ MOSTRAR/OCULTAR -->
                    <div class="input-group">
                        <label for="password">CONTRASEÑA TÁCTICA</label>
                        <div class="input-box">
                            <span class="input-icon">🔒</span>
                            <input type="password" id="password" placeholder="Ingresa tu contraseña" autocomplete="current-password">
                            <button type="button" class="password-toggle" onclick="togglePasswordVisibility()" aria-label="Mostrar contraseña">👁️</button>
                        </div>
                    </div>

                    <!-- OPCIONES -->
                    <div class="login-options">
                        <label class="remember">
                            <input type="checkbox" id="rememberMe">
                            <span class="checkmark"></span>
                            Recordarme
                        </label>
                        <a href="#" onclick="openModal('recoveryModal')">¿Olvidaste tu contraseña?</a>
                    </div>

                    <!-- Mensaje de Validación / Error / Éxito -->
                    <div id="loginMessage" class="login-message"></div>

                    <!-- 🔵 BOTÓN INGRESAR AL COMBATE -->
                    <button type="submit" class="login-button" id="loginButton">
                        <span class="button-icon">➜</span>
                        <span id="buttonText">INGRESAR AL COMBATE</span>
                    </button>

                </form>

                <!-- SEPARADOR Y REDES SOCIALES -->
                <div class="social-divider">
                    <span></span>
                    <p>O INICIAR SESIÓN CON</p>
                    <span></span>
                </div>

                <div class="social-login">
                    <button class="social-button" onclick="socialAuth('Google')">
                        <span>G</span> Google
                    </button>
                    <button class="social-button" onclick="socialAuth('Facebook')">
                        <span>f</span> Facebook
                    </button>
                    <button class="social-button" onclick="socialAuth('Steam')">
                        <span>⚙</span> Steam
                    </button>
                </div>

                <!-- REGISTRO -->
                <div class="register">
                    <span>¿NO TIENES UNA CUENTA?</span>
                    <a href="#" onclick="openModal('registerModal')">CREAR CUENTA</a>
                </div>
            </section>

        </main>

        <!-- =========================================================
           BARRA INFERIOR (FOOTER)
        ========================================================= -->
        <footer class="bottom-bar">
            <div class="copyright">
                WOLFTEAM © 2026 COMBAT UNIT
            </div>

            <div class="quick-controls">
                <button onclick="goHome()" title="Inicio">
                    <span>🏠</span>
                    <small>INICIO</small>
                </button>

                <button id="soundBtn" onclick="toggleSound()" title="Sonido">
                    <span id="soundIcon">🔊</span>
                    <small>SONIDO</small>
                </button>

                <button onclick="openModal('settingsModal')" title="Ajustes">
                    <span>⚙</span>
                    <small>AJUSTES</small>
                </button>
            </div>

            <div class="version">
                WT // v2.6.0
            </div>
        </footer>

    </div>

    <!-- =========================================================
       MODALES INTERACTIVOS (AJUSTES, REGISTRO, RECUPERACIÓN)
    ========================================================= -->

    <!-- Modal de Ajustes -->
    <div id="settingsModal" class="modal-overlay">
        <div class="modal-card">
            <h3>⚙ AJUSTES DEL SISTEMA</h3>
            <p>Configura las opciones gráficas y de audio del juego.</p>
            <div class="input-group">
                <label>MÚSICA DE FONDO</label>
                <div class="input-box" style="padding: 10px;">
                    <input type="range" min="0" max="100" value="80" style="width:100%;">
                </div>
            </div>
            <div class="modal-actions">
                <button class="btn-cancel" onclick="closeModal('settingsModal')">CERRAR</button>
                <button class="btn-confirm" onclick="closeModal('settingsModal')">GUARDAR</button>
            </div>
        </div>
    </div>

    <!-- Modal de Registro -->
    <div id="registerModal" class="modal-overlay">
        <div class="modal-card">
            <h3>👤 REGISTRO DE CUENTA</h3>
            <p>Crea tu perfil de recluta táctico para unirte a Wolfteam.</p>
            <div class="input-group">
                <label>CORREO ELECTRÓNICO</label>
                <div class="input-box">
                    <input type="email" placeholder="operativo@wolfteam.com">
                </div>
            </div>
            <div class="modal-actions">
                <button class="btn-cancel" onclick="closeModal('registerModal')">CANCELAR</button>
                <button class="btn-confirm" onclick="triggerAlert('¡Registro completado! Revisa tu correo.')">REGISTRARSE</button>
            </div>
        </div>
    </div>

    <!-- Modal de Recuperación -->
    <div id="recoveryModal" class="modal-overlay">
        <div class="modal-card">
            <h3>🔑 RECUPERAR CONTRASEÑA</h3>
            <p>Ingresa tu usuario o correo para enviarte el enlace de restablecimiento.</p>
            <div class="input-group">
                <label>IDENTIFICACIÓN O CORREO</label>
                <div class="input-box">
                    <input type="text" placeholder="Usuario o Email">
                </div>
            </div>
            <div class="modal-actions">
                <button class="btn-cancel" onclick="closeModal('recoveryModal')">CANCELAR</button>
                <button class="btn-confirm" onclick="triggerAlert('Enlace enviado a tu dirección registrada.')">ENVIAR</button>
            </div>
        </div>
    </div>

    <!-- =========================================================
       JAVASCRIPT & WEB AUDIO SYNTHESIZER
    ========================================================= -->
    <script>
        /* 🔊 SINTETIZADOR DE AUDIO WEB (EFECTOS DE SONIDO SINTETIZADOS) */
        let audioCtx = null;
        let soundEnabled = true;

        function initAudio() {
            if (!audioCtx) {
                audioCtx = new (window.AudioContext || window.webkitAudioContext)();
            }
        }

        function playBeep(freq = 440, type = 'sine', duration = 0.1) {
            if (!soundEnabled) return;
            try {
                initAudio();
                const osc = audioCtx.createOscillator();
                const gain = audioCtx.createGain();
                osc.type = type;
                osc.frequency.setValueAtTime(freq, audioCtx.currentTime);
                gain.gain.setValueAtTime(0.1, audioCtx.currentTime);
                gain.gain.exponentialRampToValueAtTime(0.001, audioCtx.currentTime + duration);
                osc.connect(gain);
                gain.connect(audioCtx.destination);
                osc.start();
                osc.stop(audioCtx.currentTime + duration);
            } catch (e) {
                console.log("Audio no iniciado por interacción de usuario.");
            }
        }

        /* 👁️ MOSTRAR / OCULTAR CONTRASEÑA */
        function togglePasswordVisibility() {
            playBeep(600, 'triangle', 0.08);
            const passInput = document.getElementById('password');
            const toggleBtn = document.querySelector('.password-toggle');

            if (passInput.type === 'password') {
                passInput.type = 'text';
                toggleBtn.textContent = '🔒';
            } else {
                passInput.type = 'password';
                toggleBtn.textContent = '👁️';
            }
        }

        /* 🔐 VALIDACIÓN Y FLUJO DE LOGIN */
        function handleLogin(event) {
            event.preventDefault();
            
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();
            const message = document.getElementById('loginMessage');
            const button = document.getElementById('loginButton');
            const buttonText = document.getElementById('buttonText');

            message.className = 'login-message';

            // 🔐 Validar campos vacíos
            if (username === '' || password === '') {
                playBeep(200, 'sawtooth', 0.2);
                message.textContent = '⚠ Completa todos los campos para continuar.';
                message.classList.add('error');
                return;
            }

            // ⏳ Estado: VERIFICANDO IDENTIDAD...
            playBeep(800, 'sine', 0.1);
            button.disabled = true;
            button.classList.add('loading');
            buttonText.textContent = '⏳ VERIFICANDO IDENTIDAD...';

            setTimeout(() => {
                // ✅ Estado: ACCESO AUTORIZADO
                playBeep(1200, 'sine', 0.25);
                message.textContent = '✓ Credenciales verificadas correctamente.';
                message.classList.add('success');
                
                button.classList.remove('loading');
                button.classList.add('success-button');
                buttonText.textContent = '✅ ACCESO AUTORIZADO';

                setTimeout(() => {
                    alert('¡Bienvenido Operativo! Redirigiendo al servidor de combate...');
                }, 1000);

            }, 1800);
        }

        /* REDES SOCIALES */
        function socialAuth(platform) {
            playBeep(700, 'sine', 0.1);
            alert(`Iniciando autenticación con ${platform}...`);
        }

        /* MODALES */
        function openModal(id) {
            playBeep(500, 'sine', 0.1);
            document.getElementById(id).classList.add('active');
        }

        function closeModal(id) {
            playBeep(300, 'sine', 0.1);
            document.getElementById(id).classList.remove('active');
        }

        function triggerAlert(text) {
            playBeep(900, 'sine', 0.15);
            alert(text);
            document.querySelectorAll('.modal-overlay').forEach(m => m.classList.remove('active'));
        }

        /* 🏠 INICIO */
        function goHome() {
            playBeep(500, 'sine', 0.1);
            window.location.href = '#';
        }

        /* 🔊 BOTÓN DE SONIDO */
        function toggleSound() {
            soundEnabled = !soundEnabled;
            const icon = document.getElementById('soundIcon');
            if (soundEnabled) {
                icon.textContent = '🔊';
                playBeep(800, 'sine', 0.1);
            } else {
                icon.textContent = '🔇';
            }
        }
    </script>
</body>

</html>