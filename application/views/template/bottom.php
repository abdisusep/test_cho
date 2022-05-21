            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/toastr.min.js') ?>"></script>
    <?php if($this->session->flashdata('alert')) : ?>
    <script>
        toastr.success('<?= $this->session->flashdata('alert') ?>');
    </script>
    <?php endif; ?>
</body>
</html>