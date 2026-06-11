<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>งานที่ 1 - โปรแกรมสูตรคูณ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    
    <div class="header">
        <?php
            echo "<h1>งานที่ 1 ณัฐวุฒิ แซ่ตั๊น BIT.2/4 เลขที่ 23</h1>";
        ?>
        <a href="while.php" class="link-back">← กลับไปหน้า While Loop</a>
    </div>

    <form action="" method="GET">
        <div class="form-group">
            <label for="num">แม่สูตรคูณที่ต้องการคำนวณ</label>
            <input type="number" name="num" id="num" class="input-box" placeholder="ระบุตัวเลข" required>
        </div>
        <button type="submit" class="btn-submit">แสดงผล</button>
    </form>

    <?php
    if (isset($_GET["num"]) && $_GET["num"] !== "") {
        $num = intval($_GET["num"]); 
        
        echo '<div class="result-section">';
        echo '<div class="result-title">สูตรคูณแม่ ' . $num . '</div>';
        
        for ($i = 1; $i <= 12; $i++) {
            echo '<div class="multiplication-row">';
            echo '<span>' . $num . ' × ' . $i . '</span>';
            echo '<span>=</span>';
            echo '<span class="total-value">' . ($num * $i) . '</span>';
            echo '</div>';
        }
        
        echo '</div>';
    }
    ?>