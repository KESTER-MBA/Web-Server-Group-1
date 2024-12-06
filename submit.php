  <?php if (isset($_GET['status'])): ?>
            <p class="<?= $_GET['status'] == 'success' ? 'success' : 'error' ?>">
                <?= $_GET['status'] == 'success' ? 'Submission successful!' : 'Submission failed. Please try again.' ?>
            </p>
