 
 
 <!-- Footer -->
 <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; <?php echo "<script> document.write(new Date().getFullYear());</script>"; ?> developer <a href='https://rumanahmed.com' target='_blank'>Algo-unlocks</a></span>
                    </div>
                </div>
 </footer>

 <!-- End of Footer -->
 </div>
 <!-- End of Content Wrapper -->


 <script>

    var preloader = document.getElementById("site-loader");
    function myFunction(){
        preloader.style.display = "none";
    }

 </script>


 <script>

    $(document).ready(function () {
        $('#datatablesapi').DataTable({
            "pagingType" : "full_numbers",
            "lengthMenu": [
                [10,25,50,-1],
                [10,25,50,"All"]
            ],
            responsive : true,
            language : {
                search : "_INPUT_",
                searchPlaceholder: "search cse teacher"
            }, 
        });
    });

</script>

 

</body>

</html>