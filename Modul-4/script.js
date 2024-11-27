// Data Alumni untuk simulasi
const alumniData = [
    { name: "Hariinaka", jurusan: "Sistem Informasi" },
    { name: "Rery", jurusan: "Teknik Informatika" },
    { name: "Dina", jurusan: "Manajemen Informatika" },
    { name: "Eka", jurusan: "Teknik Sipil" },
    { name: "Rani", jurusan: "Desain Komunikasi Visual" },
  ];
  
  // Fungsi untuk mencari alumni
  function searchAlumni() {
    const jurusan = document.getElementById("search-jurusan").value;
    const searchName = document.getElementById("search-input").value.toLowerCase();
    const alumniList = document.getElementById("alumni-list");
  
    // Filter data berdasarkan input
    const filteredAlumni = alumniData.filter(alumni => {
      const matchName = alumni.name.toLowerCase().includes(searchName);
      const matchJurusan = jurusan === "" || alumni.jurusan === jurusan;
      return matchName && matchJurusan;
    });
  
    // Tampilkan hasil pencarian
    alumniList.innerHTML = "";
    if (filteredAlumni.length > 0) {
      filteredAlumni.forEach(alumni => {
        const div = document.createElement("div");
        div.textContent = `${alumni.name} - ${alumni.jurusan}`;
        alumniList.appendChild(div);
      });
    } else {
      alumniList.textContent = "Alumni tidak ditemukan.";
    }
  }
  
  // Tambahkan event listener untuk input dan dropdown
  document.getElementById("search-jurusan").addEventListener("change", searchAlumni);
  document.getElementById("search-input").addEventListener("input", searchAlumni);
  