<script>
    let bottoni = document.querySelectorAll('.btnDelete');

    bottoni.forEach(function(el){
       
        el.addEventListener('click', function(e){
            e.preventDefault();
            let consenso = confirm('Are you sure you want to delete?');
            if (consenso){
                location.href = el.href
            }
        })

    })
</script>
</body>
</html>