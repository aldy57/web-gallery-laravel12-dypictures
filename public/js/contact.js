const form = document.getElementById("contactForm");

async function handleSubmit(event) {
    event.preventDefault();
    
    const btn = form.querySelector('button');
    const originalBtnText = btn.innerText;

    btn.innerText = 'Mengirim...';
    btn.disabled = true;

    const status = document.getElementById("my-form-status");
    const data = new FormData(event.target);

    try {
        const response = await fetch(event.target.action, {
            method: form.method,
            body: data,
            headers: {
                'Accept': 'application/json'
            }
        });

        if (response.ok) {
            Swal.fire({
                title: 'Terkirim!',
                text: 'Pesan Anda berhasil dikirim. Kami akan membalasnya dengan segera.',
                icon: 'success',
                confirmButtonText: 'Oke',
                confirmButtonColor: '#222',
                customClass: {
                    popup: 'rounded-4'
                }
            });
            form.reset();
        } else {
            const responseData = await response.json();
            let errorMessage = "Terjadi kesalahan saat mengirim pesan.";
            if (Object.hasOwn(responseData, 'errors')) {
                errorMessage = responseData["errors"].map(error => error["message"]).join(", ");
            }
            Swal.fire({
                title: 'Oops...',
                text: errorMessage,
                icon: 'error',
                confirmButtonColor: '#222'
            });
        }
    } catch (error) {
        Swal.fire({
            title: 'Gagal',
            text: 'Tidak dapat terhubung ke server. Cek koneksi internet Anda.',
            icon: 'error',
            confirmButtonColor: '#222'
        });
    } finally {
        btn.innerText = originalBtnText;
        btn.disabled = false;
    }
}

form.addEventListener("submit", handleSubmit);