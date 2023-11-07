<html>
    <head>
        <!-- semua div akan ganti menyesuaikan div di style
        (ga cuma div, bisa h2 h1 dll)-->
        <link rel=stylesheet href="mystyle.css">
        <style>
            div {
                color : red;
                font-weight: bold;
                text-align: right;
            }
            .judulhalaman {
                text-align: center;
                font-size: x-large;
            }
        </style>
    </head>
    <!-- Inlince CSS, digunakan ketika ada spesifik ke 1 bagian saja-->
    <body>
        <div class="judulhalaman"> Emang boleh sengantuk itu</div>
        <p style="text-decoration: line-through;
        color:lime">Halo Pack</p>
        <!--Inpage CSS, digunakan ketika ada yang spesifik ke halaman khusus-->
        <div>Halo Ngab</div>
        <!-- External CSS, digunakan untuk format umum 1 website-->
        <span>Apaan nih ngab</span>
    </body>
</html>