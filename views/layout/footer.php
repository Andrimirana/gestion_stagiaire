</body>
</html>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const rows = document.querySelectorAll(".clickable-row");
    rows.forEach(row => {
        row.addEventListener("click", function(e) {
           
            if (!e.target.closest("a")) {
                window.location = this.dataset.href;
            }
        });
    });
});
</script>
