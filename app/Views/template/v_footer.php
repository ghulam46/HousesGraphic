<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="/logoutAdmin">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('sbAdmin/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('sbAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('sbAdmin/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('sbAdmin/js/sb-admin-2.min.js'); ?>p"></script>

<!-- Page level plugins -->
<script src="<?= base_url('sbAdmin/vendor/chart.js/Chart.min.js'); ?>"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('sbAdmin/js/demo/chart-area-demo.js'); ?>"></script>
<script src="<?= base_url('sbAdmin/js/demo/chart-pie-demo.js'); ?>"></script>

<script>
    function previewImgShop() {
        const coverShop = document.querySelector('#cover');
        const coverLabelShop = document.querySelector('.custom-file-label');
        const imgPreviewShop = document.querySelector('.img-previewShop');

        coverLabelShop.textContent = coverShop.files[0].name;

        const fileCoverShop = new FileReader();
        fileCoverShop.readAsDataURL(coverShop.files[0]);
        fileCoverShop.onload = function(e) {
            imgPreviewShop.src = e.target.result;
        }
    }

    function previewImgPorto() {
        const coverPorto = document.querySelector('#cover');
        const coverLabel = document.querySelector('.custom-file-label');
        const imgPreviewPorto = document.querySelector('.img-previewPorto');

        coverLabel.textContent = coverPorto.files[0].name;

        const fileCoverPorto = new FileReader();
        fileCoverPorto.readAsDataURL(coverPorto.files[0]);

        fileCoverPorto.onload = function(e) {
            imgPreviewPorto.src = e.target.result;
        }
    }
</script>

</body>

</html>