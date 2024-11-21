<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        ul {
            list-style-type: none;
            padding: 0;
            width: 80%;
            margin: 20px auto;
        }
        li {
            background-color: #fff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 6px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 16px;
        }
        li:hover {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Daftar Buku Germed</h1>
    <a href="index.php?controller=Book&action=add">Tambahkan Buku Baru</a>
    <ul>
        <?php foreach ($books as $book): ?>
            <li><?php echo htmlspecialchars($book['title']); ?> by <?php echo htmlspecialchars($book['author']); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
