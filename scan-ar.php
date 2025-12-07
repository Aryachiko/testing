<?php
// Koneksi Database
$conn = new mysqli("localhost", "root", "", "apb");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil Data AR
$sql = "SELECT * FROM file_ar ORDER BY id ASC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scan AR - POLBENG</title>
    <!-- CSS BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- ICON FONTAWESOME -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- JS A-Frame -->
    <script src="https://aframe.io/releases/1.6.0/aframe.min.js"></script>
    <!-- JS MindAR -->
    <script src="https://cdn.jsdelivr.net/npm/mind-ar@1.2.5/dist/mindar-image-aframe.prod.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        a-scene {
            width: 100%;
            height: 100vh;
        }

        .overlay-header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            align-items: center;
            padding: 10px 15px;
            background: rgba(0, 0, 0, 0.4);
            z-index: 9999;
        }

        .overlay-header h1 {
            color: #fff;
            font-size: 18px;
            margin: 0;
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <!-- Overlay Header -->
    <div class="overlay-header">
        <button class="btn btn-danger btn-sm" onclick="window.history.back()">
            <i class="fa fa-arrow-left"></i> Back
        </button>
        <h1>Scan Augmented Reality</h1>
    </div>
    <?php while ($row = $result->fetch_assoc()): ?>
        <a-scene mindar-image="imageTargetSrc: admin/data-ar/<?= htmlspecialchars($row['file_mind']); ?>;"
            color-space="sRGB" renderer="colorManagement: true, physicallyCorrectLights" vr-mode-ui="enabled: false"
            device-orientation-permission-ui="enabled: false">
            <a-assets>
                <a-asset-item id="model-<?= $row['id']; ?>"
                    src="admin/data-ar/<?= htmlspecialchars($row['file_glb']); ?>"></a-asset-item>
            </a-assets>
            <a-camera position="0 0 0" look-controls="enabled: false"></a-camera>
            <a-entity mindar-image-target="targetIndex: 0">
                <a-gltf-model src="#model-<?= $row['id']; ?>" position="0 0 0.1" scale="0.010 0.010 0.010" rotation="90 0 0"
                    animation="property: position; to: 0 0.1 0.1; dur: 1000; easing: easeInOutQuad; loop: true; dir: alternate">
                </a-gltf-model>
            </a-entity>
        </a-scene>
    <?php endwhile; ?>
</body>

</html>
<?php $conn->close(); ?>