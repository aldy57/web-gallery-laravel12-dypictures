function toggleUserDropdown() {
    var dropdown = document.getElementById('userDropdown');
    dropdown.classList.toggle('show');
}

document.addEventListener('click', function(event) {
    var dropdown = document.getElementById('userDropdown');
    var userProfile = document.querySelector('.user-profile');
    
    if (!userProfile.contains(event.target)) {
        dropdown.classList.remove('show');
    }
});

function editPhoto(id, title, location) {
    document.getElementById('editId').value = id;
    document.getElementById('editTitle').value = title;
    document.getElementById('editLocation').value = location;

    document.getElementById('editForm').action = '/member/foto/update/' + id;

    var editModal = new bootstrap.Modal(document.getElementById('editModal'));
    editModal.show();
}

function deletePhoto(id) {
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Foto yang dihapus tidak dapat dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('deleteForm' + id).submit();
        }
    });
}

function confirmLogout() {
    Swal.fire({
        title: 'Keluar?',
        text: "Sesi anda akan diakhiri.",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#222',
        confirmButtonText: 'Logout',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('logoutForm').submit();
        }
    });
}

setTimeout(function () {
    var toasts = document.querySelectorAll('.toast');
    toasts.forEach(function (toast) {
        var bsToast = new bootstrap.Toast(toast);
        bsToast.hide();
    });
}, 4000);
