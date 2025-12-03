<?php include 'includes/header.php'; ?>
    <section class="section">
        <h2>Kontak Kami</h2>
        <form class="contact-form" action="process_contact.php" method="post"> <!-- Tambahkan file PHP untuk proses form -->
            <input type="text" name="name" placeholder="Nama" required>
            <input type="email" name="email" placeholder="Email" required>
            <textarea name="message" placeholder="Pesan" required></textarea>
            <button type="submit">Kirim</button>
        </form>
        <p>Alamat: Jl. Pendidikan No. 123, Kota ABC</p>
        <p>Telepon: (021) 123-4567</p>
    </section>
<?php include 'includes/footer.php'; ?>