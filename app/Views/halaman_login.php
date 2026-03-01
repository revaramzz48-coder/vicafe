<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Kasir - ViCafe</title>
    <style>
        body, html { margin: 0; padding: 0; height: 100%; font-family: 'Segoe UI', sans-serif;}
        .bg-wrapper {
            background-image: url('https://images.unsplash.com/photo-1554118811-1e0d58224f24?q=80&w=2047&auto=format&fit=crop');
            background-size: cover; background-position: center;
            height: 100vh; display: flex; align-items: center; justify-content: center;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 40px; border-radius: 20px; text-align: center;
            color: white; width: 300px; border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .input {
            width: 100%; padding: 12px; margin: 10px 0;
            border-radius: 8px; border: none; outline: none;
        }
        .btn-login {
            width: 100%; padding: 12px; background: #795548;
            color: white; border: none; border-radius: 8px;
            font-weight: bold; cursor: pointer;
        }
        .error-msg { color: #ffcccc; font-size: 0.8em; margin-bottom: 10px;}
    </style>
</head>
<body>
    <div class="bg-wrapper">
        <div class="glass-card">
            <h2>Login Kasir</h2>

            <?php if(session()->getFlashdata('error')) ?>
                <div class="error-msg"></div>
        </div>

    </div>
</body>
</html>