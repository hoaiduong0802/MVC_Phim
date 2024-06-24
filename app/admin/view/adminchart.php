<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="col-md-12">
        <h1>Admin Chart 1</h1>
        <p>Total Movie Pass: <?php echo $totalMoviePass; ?></p>
        <canvas id="userMoviePassChart" width="400" height="200"></canvas>
    </div>
    <div class="col-md-12">
        <h1>Admin Chart 2</h1>
        <p>Total Users: <?php echo $totalUsers; ?></p>
        <canvas id="userMoviePassChart2" width="400" height="200"></canvas>
    </div>
    <div class="col-md-12">
        <h1>Most Purchased Movie Pass</h1>
        <p>Movie Pass ID: <?php echo $mostPurchasedMoviePass['mpID'];?></p>
        <p>Purchase Count: <?php echo $mostPurchasedMoviePass['purchaseCount']; ?></p>
        <canvas id="mostPurchasedMoviePassChart" width="400" height="200"></canvas>
    </div>

    <script>
        const chartTotalMoviePass = () => {
            var dataUserMoviePass = JSON.parse('<?php echo $dataUserMoviePass; ?>');
            var moviePassSales = {}; // Đếm số lượng bán ra của mỗi loại moviepass

            dataUserMoviePass.forEach(item => {
                if (moviePassSales[item.moviePassType]) {
                    moviePassSales[item.moviePassType]++;
                } else {
                    moviePassSales[item.moviePassType] = 1;
                }
            });

            var labels = Object.keys(moviePassSales);
            var values = Object.values(moviePassSales);

            // Tạo biểu đồ
            var ctx = document.getElementById('userMoviePassChart').getContext('2d');
            var userMoviePassChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Total Orders per MoviePass Type',
                        data: values,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        // Gọi hàm để vẽ biểu đồ
        chartTotalMoviePass();

        const chartTotalUser = () => {
            var dataUserMoviePass = JSON.parse('<?php echo $dataUserMoviePass; ?>');
            var userIDs = {};
            dataUserMoviePass.forEach(item => {
                if (userIDs[item.userID]) {
                    userIDs[item.userID]++;
                } else {
                    userIDs[item.userID] = 1;
                }
            });

            var labels = Object.keys(userIDs);
            var values = Object.values(userIDs);

            // Tạo biểu đồ
            var ctx = document.getElementById('userMoviePassChart2').getContext('2d');
            var userMoviePassChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Number of Transactions per User',
                        data: values,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        // Gọi hàm để vẽ biểu đồ
        chartTotalUser();

        const chartMostPurchasedMoviePass = () => {
            var ctx = document.getElementById('mostPurchasedMoviePassChart').getContext('2d');
            var mostPurchasedMoviePassChart = new Chart(ctx, {
                type: 'bar', // Bạn có thể thay đổi thành 'pie' hoặc 'doughnut' nếu muốn
                data: {
                    labels: ['<?php echo $mostPurchasedMoviePass['mpID']; ?>'],
                    datasets: [{
                        label: 'Purchase Count',
                        data: ['<?php echo $mostPurchasedMoviePass['purchaseCount']; ?>'],
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        // Gọi hàm để vẽ biểu đồ
        chartMostPurchasedMoviePass();
    </script>
</body>

</html>