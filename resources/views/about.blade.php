<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .glass-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 60px 50px;
            max-width: 800px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        h1 {
            color: #fff;
            font-size: 3em;
            margin-bottom: 20px;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        p {
            color: #f0f0f0;
            font-size: 1.2em;
            line-height: 1.8;
            margin-bottom: 30px;
            text-align: justify;
        }

        .btn-home {
            display: inline-block;
            padding: 15px 40px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            text-decoration: none;
            border-radius: 50px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
            font-weight: 600;
            backdrop-filter: blur(5px);
        }

        .btn-home:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-container {
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <div class="glass-container">
        <h1>Tentang Kami</h1>
        <p>
            Nama Saya Ananta Galih Mahardika. Saya adalah mahasiswa informatika angkatan 2024.
        </p>
        <p>
            Segitu aja
        </p>
        <div class="btn-container">
            <a href="/home" class="btn-home">← Kembali ke Home</a>
        </div>
    </div>
</body>
</html>