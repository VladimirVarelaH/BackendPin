<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                padding: 2vw;
            }
            h1{
                padding: 0;
                margin: 0;
            }
            .header{
                text-align: center;
            }
        </style>
    </head>
    <body class="antialiased">
        <section class="header">
            <h1>Servidor para el PIN del Diplomado de Desarrollo FullStack</h1>
            <p>Para desarrollar el servidor del Proyecto Integrador se utilizó el lenguaje de programación PHP con su framework Laravel y una base de datos MySQL. </p>
        </section>
        
        <section>

            <h2>Lar Rutas</h2>
            <p>La aplicación cuenta con dos rutas principales:</p>
            <ul>
                <li>* La ruta raíz (/): Que despliega la documentación del proyecto.</li>
                <li>* La API post (/api/post): Que contiene la funcionalidad de validación de datos y registro.</li>
            </ul>
            <p>Además. se agragó la API de testing <code>answer</code>, que sirve para verificar la conección con el cliente.</p>     
        </section>
        <section>
            <h2>Las Vistas</h2>
            <p>Para completar el proyecto se desarrollaron tres vistas:</p>
            <ul>
                <li>answer: Una vista que devuelve la respuesta a todas las preguntas.</li>
                <li>wellcome: La vista con la documentación del proyecto.</li>
                <li>mail: la vista con la plantilla para el correo de verificación.</li>
            </ul>
        </section>

    <section>
        <h2>El Diseño</h2>
        <p>
            Para diseñar la aplicación se utilizó el patrón MVC (<em>Modelo Vista Controlador</em>). Con esto en mente se comenzó el proyecto diseñando la base de datos, creando la migración de la tabla <code>contacts</code> correspondiente con el registro de contactos. <br> 
            Luego, a partir de esta migración, se creó el modelo <code>Contact.php</code> y luego, en <code>ContactController.php</code>, se programó la lógica de validación y almacenamiento de datos.  <br>
            Por último, se conectó el controlador a la  API <code>post</code> en el archivo <code>api.php</code>.
        </p>
    </section>

    <section>
        <h2>El Funcionamiento</h2>
        <p></p>
        <ul>
            <li>La API <code>post</code> recibe una solicitud y pasa la información al <code>ContactController</code>.</li>
            <li>El contacto controller valida la información recibida, en el caso de que los datos sean inválidos, responde al cliente con un <code>{"status":200}</code>, significando que la conexión fue exitosa.</li>
            <li>En el caso de que la validación sea superada, se procede a guardar el registro en base de datos, enviar un correo con la plantilla <code>mail.blade.php</code> y se responde con un <code>{"status":201}</code>, indicando un nuevo registro creado en la base de datos.</li>
        </ul>
    </section>

    <section>
        <h2> El deploy</h2>
        <p>
            A la hora de hacer el deploy de la aplicación se eligieron los servidores de Heroku y una base de datos gratuita de Clever Cloud. El proceso fue relativamente sencillo, configurando la ruta del proyecto en heroku como un <code>git remote</code> de este repositorio y empujando ahí el código correspondiente. <br>  
            Una vez la aplicación estuvo en la nube, se realizó una migración de la base de datos en Clever Cloud y se pudo utilizar con normalidad.
        </p>
    </section>
</body>
    
</html>

