<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nosotros | Sistema Académico</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- NAVBAR -->
    <nav class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <div>
                <h1 class="text-2xl font-bold text-red-600">
                    Sistema Académico
                </h1>
                <p class="text-xs text-gray-500">
                    Gestión académica
                </p>
            </div>

            <div class="flex gap-6 text-sm font-medium">
                <a href="/" class="text-gray-600 hover:text-red-600 transition">
                    Inicio
                </a>

                <a href="/nosotros" class="text-red-600">
                    Nosotros
                </a>

                <a href="#" class="text-gray-600 hover:text-red-600 transition">
                    Servicios
                </a>

                <a href="#" class="text-gray-600 hover:text-red-600 transition">
                    Contacto
                </a>
            </div>

        </div>
    </nav>


    <!-- HERO -->
    <section class="bg-gradient-to-r from-red-600 to-red-700 text-white">

        <div class="max-w-7xl mx-auto px-6 py-24">

            <div class="max-w-3xl">

                <span class="inline-block bg-white/10 px-4 py-2 rounded-full text-sm mb-5">
                    Conoce nuestro sistema
                </span>

                <h2 class="text-4xl md:text-6xl font-bold leading-tight mb-6">
                    Transformamos la gestión académica
                </h2>

                <p class="text-lg text-red-100 leading-relaxed">
                    Somos una plataforma diseñada para facilitar la gestión
                    académica y administrativa de las instituciones educativas,
                    brindando herramientas modernas, rápidas y accesibles.
                </p>

            </div>

        </div>

    </section>


    <!-- SOBRE NOSOTROS -->
    <section class="max-w-7xl mx-auto px-6 py-20">

        <div class="grid md:grid-cols-2 gap-12 items-center">

            <div>

                <span class="text-red-600 font-semibold uppercase text-sm">
                    Sobre nosotros
                </span>

                <h2 class="text-3xl md:text-4xl font-bold mt-3 mb-6">
                    Una solución para una mejor gestión académica
                </h2>

                <p class="text-gray-600 leading-relaxed mb-5">
                    El Sistema Académico es una plataforma web creada para
                    centralizar y organizar la información académica de una
                    institución educativa.
                </p>

                <p class="text-gray-600 leading-relaxed">
                    Nuestro objetivo es simplificar procesos como la gestión
                    de estudiantes, docentes, cursos, programas de estudio
                    y demás información académica, permitiendo que estos
                    procesos sean más eficientes y organizados.
                </p>

            </div>


            <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">

                <div class="grid grid-cols-2 gap-6">

                    <div class="bg-red-50 rounded-xl p-6">
                        <div class="text-3xl font-bold text-red-600">
                            100%
                        </div>

                        <p class="text-gray-600 mt-2">
                            Gestión digital
                        </p>
                    </div>


                    <div class="bg-gray-50 rounded-xl p-6">
                        <div class="text-3xl font-bold text-gray-800">
                            24/7
                        </div>

                        <p class="text-gray-600 mt-2">
                            Disponibilidad
                        </p>
                    </div>


                    <div class="bg-gray-50 rounded-xl p-6">
                        <div class="text-3xl font-bold text-gray-800">
                            01
                        </div>

                        <p class="text-gray-600 mt-2">
                            Plataforma centralizada
                        </p>
                    </div>


                    <div class="bg-red-50 rounded-xl p-6">
                        <div class="text-3xl font-bold text-red-600">
                            +100
                        </div>

                        <p class="text-gray-600 mt-2">
                            Registros gestionables
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- MISION Y VISION -->
    <section class="bg-white border-y border-gray-100">

        <div class="max-w-7xl mx-auto px-6 py-20">

            <div class="text-center max-w-2xl mx-auto mb-14">

                <span class="text-red-600 font-semibold uppercase text-sm">
                    Nuestro propósito
                </span>

                <h2 class="text-3xl md:text-4xl font-bold mt-3">
                    Misión y visión
                </h2>

            </div>


            <div class="grid md:grid-cols-2 gap-8">

                <!-- MISIÓN -->
                <div class="rounded-2xl bg-gray-50 p-8 border border-gray-100">

                    <div class="w-12 h-12 bg-red-600 text-white rounded-xl
                                flex items-center justify-center mb-6 text-xl">
                        M
                    </div>

                    <h3 class="text-2xl font-bold mb-4">
                        Nuestra misión
                    </h3>

                    <p class="text-gray-600 leading-relaxed">
                        Proporcionar una herramienta tecnológica que permita
                        gestionar de manera eficiente, organizada y segura
                        los procesos académicos y administrativos de una
                        institución educativa.
                    </p>

                </div>


                <!-- VISIÓN -->
                <div class="rounded-2xl bg-gray-900 text-white p-8">

                    <div class="w-12 h-12 bg-red-600 rounded-xl
                                flex items-center justify-center mb-6 text-xl">
                        V
                    </div>

                    <h3 class="text-2xl font-bold mb-4">
                        Nuestra visión
                    </h3>

                    <p class="text-gray-300 leading-relaxed">
                        Ser una plataforma académica moderna y confiable que
                        contribuya a la transformación digital de las
                        instituciones educativas y facilite el acceso a la
                        información.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- VALORES -->
    <section class="max-w-7xl mx-auto px-6 py-20">

        <div class="text-center mb-14">

            <span class="text-red-600 font-semibold uppercase text-sm">
                Lo que nos representa
            </span>

            <h2 class="text-3xl md:text-4xl font-bold mt-3">
                Nuestros valores
            </h2>

        </div>


        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- CARD -->
            <div class="bg-white p-7 rounded-2xl border border-gray-100
                        shadow-sm hover:shadow-lg transition">

                <div class="text-red-600 text-3xl mb-5">
                    ✓
                </div>

                <h3 class="font-bold text-xl mb-3">
                    Compromiso
                </h3>

                <p class="text-gray-600 text-sm leading-relaxed">
                    Trabajamos para ofrecer una plataforma útil y confiable
                    para la comunidad educativa.
                </p>

            </div>


            <!-- CARD -->
            <div class="bg-white p-7 rounded-2xl border border-gray-100
                        shadow-sm hover:shadow-lg transition">

                <div class="text-red-600 text-3xl mb-5">
                    ◆
                </div>

                <h3 class="font-bold text-xl mb-3">
                    Innovación
                </h3>

                <p class="text-gray-600 text-sm leading-relaxed">
                    Utilizamos tecnología para mejorar y modernizar los
                    procesos académicos.
                </p>

            </div>


            <!-- CARD -->
            <div class="bg-white p-7 rounded-2xl border border-gray-100
                        shadow-sm hover:shadow-lg transition">

                <div class="text-red-600 text-3xl mb-5">
                    ★
                </div>

                <h3 class="font-bold text-xl mb-3">
                    Calidad
                </h3>

                <p class="text-gray-600 text-sm leading-relaxed">
                    Buscamos ofrecer una experiencia sencilla, clara y
                    eficiente para los usuarios.
                </p>

            </div>


            <!-- CARD -->
            <div class="bg-white p-7 rounded-2xl border border-gray-100
                        shadow-sm hover:shadow-lg transition">

                <div class="text-red-600 text-3xl mb-5">
                    🔒
                </div>

                <h3 class="font-bold text-xl mb-3">
                    Seguridad
                </h3>

                <p class="text-gray-600 text-sm leading-relaxed">
                    Priorizamos el manejo responsable y organizado de la
                    información académica.
                </p>

            </div>

        </div>

    </section>


    <!-- CTA -->
    <section class="bg-gray-900">

        <div class="max-w-7xl mx-auto px-6 py-16 text-center">

            <h2 class="text-3xl md:text-4xl font-bold text-white mb-5">
                Una gestión académica más sencilla
            </h2>

            <p class="text-gray-400 max-w-2xl mx-auto mb-8">
                Centraliza la información y facilita los procesos académicos
                desde una sola plataforma.
            </p>

            <a href="/"
               class="inline-block bg-red-600 hover:bg-red-700
                      text-white font-semibold px-7 py-3 rounded-xl
                      transition">
                Ir al inicio
            </a>

        </div>

    </section>


    <!-- FOOTER -->
    <footer class="bg-white border-t border-gray-200">

        <div class="max-w-7xl mx-auto px-6 py-8
                    flex flex-col md:flex-row
                    justify-between items-center gap-4">

            <p class="text-sm text-gray-500">
                © 2026 Sistema Académico. Todos los derechos reservados.
            </p>

            <p class="text-sm text-gray-400">
                Plataforma de gestión académica
            </p>

        </div>

    </footer>

</body>
</html>