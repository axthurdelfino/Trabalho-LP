document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('chartLivros');
    
    if (ctx) {
        // Dados do PHP para o gráfico (serão injetados via HTML)
        const dados = window.dadosLivros || [];
        
        const labels = dados.map(item => item.titulo);
        const valores = dados.map(item => parseInt(item.total_emprestimos));
        
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels.length > 0 ? labels : ['Nenhum dado'],
                datasets: [{
                    label: 'Quantidade de Empréstimos',
                    data: valores.length > 0 ? valores : [0],
                    backgroundColor: [
                        'rgba(66, 165, 245, 0.8)',
                        'rgba(255, 167, 38, 0.8)',
                        'rgba(102, 187, 106, 0.8)',
                        'rgba(171, 71, 188, 0.8)',
                        'rgba(38, 198, 218, 0.8)'
                    ],
                    borderColor: [
                        '#1565C0',
                        '#E65100',
                        '#2E7D32',
                        '#6A1B9A',
                        '#00838F'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                }
            }
        });
    }
});