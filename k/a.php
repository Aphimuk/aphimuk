<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>อภิมุข แสงดอกไม้(แฟร้งค์)</title>
    <style>
       
        .btn {
            padding: 10px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            margin: 5px;
            transition: 0.3s;
        }

        
        .btn-green {
            background-color: #28a745;
            color: white;
        }
        .btn-green:hover {
            background-color: #218838;
        }

       
        .btn-yellow {
            background-color: #ffc107;
            color: #212529;
        }
        .btn-yellow:hover {
            background-color: #e0a800;
        }

        
        #myImage {
            display: none; 
            margin-top: 20px;
            max-width: 300px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
    </style>
</head>

<body>
    <h1>66010914024 อภิมุข แสงดอกไม้(แฟร้งค์)</h1>
    
    <button type="button" onclick="showImage()" class="btn btn-green"> อภิมุข</button>

    <button type="button" onclick="hideImage()" class="btn btn-yellow"> อาจารย์</button>

    <div id="imageContainer">
        <br>
        <img id="myImage" src="img/1.jpg" alt="รูปภาพของแฟร้งค์">
        <img id="myImage2" src="img/2.jpg" alt="รูปภาพของอาจารย์>
    </div>

    <script>
       
        function showImage() {
            document.getElementById('myImage').style.display = 'block';
        }

        
        function hideImage() {
            document.getElementById('myImage2').style.display = 'none';
        }
    </script>
</body>
</html>