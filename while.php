<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Dashboard (1-12)</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Sarabun:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', 'Sarabun', sans-serif; }
    </style>
</head>
<body class="bg-[#f8fafc] text-[#334155] min-h-screen flex flex-col justify-between">

    <header class="bg-white border-b border-[#e2e8f0] py-6 px-8 shadow-sm">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-2xl font-semibold text-[#0f172a] tracking-tight">Multiplication Table Dashboard</h1>
            <p class="text-sm text-[#64748b] mt-1">ตารางสูตรคูณแม่ 1 ถึง แม่ 12 แสดงผลแบบเรียลไทม์</p>
        </div>
    </header>

    <main class="max-w-7xl mx-auto p-6 md:p-8 w-full flex-grow">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            
            <?php
            // ลูปสร้างแม่สูตรคูณตั้งแต่แม่ 1 ถึง 12
            for ($target = 1; $target <= 12; $target++) {
                echo '<div class="bg-white border border-[#e2e8f0] rounded-xl shadow-sm p-5 hover:border-[#cbd5e1] transition-colors duration-150">';
                
                // หัวข้อการ์ด (เช่น แม่ 2)
                echo '  <div class="flex items-center justify-between mb-4 pb-2 border-b border-[#f1f5f9]">';
                echo '      <span class="text-xs font-semibold text-[#64748b] uppercase tracking-wider">Table</span>';
                echo "      <span class='text-sm font-bold bg-[#1e293b] text-white px-2 py-0.5 rounded'>แม่ $target</span>";
                echo '  </div>';
                
                // เนื้อหาตารางสูตรคูณคูณ 1 ถึง 12 inside the card
                echo '  <div class="space-y-1.5 text-xs font-mono">';
                for ($i = 1; $i <= 12; $i++) {
                    $result = $target * $i;
                    echo "  <div class='flex justify-between text-[#475569]'>";
                    echo "      <span>$target × $i</span>";
                    echo "      <span class='font-semibold text-[#0f172a]'>$result</span>";
                    echo "  </div>";
                }
                echo '  </div>'; // End Table Content
                
                echo '</div>'; // End Card
            }
            ?>

        </div>
    </main>

    <footer class="py-4 text-center text-xs text-[#94a3b8] font-mono border-t border-[#e2e8f0] bg-white mt-12">
        &copy; <?php echo date('Y'); ?> Localhost Dashboard. Powered by PHP Loop.
    </footer>

</body>
</html>