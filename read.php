<?php 
$opendata = file_get_contents('data/data.txt');
?>

<html>
<head>
<meta charset="utf-8">
<title>TEST</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"
  integrity="sha512-VMsZqo0ar06BMtg0tPsdgRADvl0kDHpTbugCBBrL55KmucH6hP9zWdLIWY//OTfMnzz6xWQRxQqsUFefwHuHyg=="
  crossorigin="anonymous"></script>
<script
  src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns@next/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
</head>
<body>
<div style="width:400px">
  <canvas id="mychart-radar"></canvas>
</div>
<script>
    var jsArray = <?php echo $opendata;?>;
    console.log(jsArray);

    var ctx = document.getElementById('mychart-radar'); // 'mychart-radar' IDを持つ要素を取得し、変数ctxに代入
    var myChart = new Chart(ctx, { // 新しいChartオブジェクトを作成し、変数myChartに代入
      type: 'radar', // チャートのタイプをレーダーチャートに設定
      data: { // チャートのデータ設定
        labels: ['イライラ度', 'ハラハラ度', 'もんもん度', 'しみじみ度', 'しくしく度'], // レーダーチャートの軸のラベル
        datasets:jsArray,
      },
      options: { // チャートのオプション設定
        scales: { // スケール設定
          r: { // レーダーチャートの放射状スケール（'r'）の設定
            min: 0, // スケールの最小値
            max: 50, // スケールの最大値
            backgroundColor: 'lightyellow', // スケールの背景色
            grid: { // グリッドラインの設定
              color: 'lightseagreen', // グリッドラインの色
            },
            angleLines: { // 角度線の設定
              color: 'brown', // 角度線の色
            },
            pointLabels: { // ポイントラベルの設定
              color: 'blue', // ラベルの文字色
              backdropColor: '#ddf', // ラベルの背景色
              backdropPadding: 5, // ラベル背景のパディング
              padding: 20, // ラベルのパディング
            },
          },
        },
      },
    });
    </script>
</div>
</body>
</html>