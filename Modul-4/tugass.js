const students = {
    SI: [
      "Adi",
      "Budi",
      "Citra",
      "Dewi",
      "Eka",
      "Fajar",
      "Gita",
      "Indra",
      "Joko",
      "Kartini",
    ],
    TI: [
      "Evi",
      "Faisal",
      "Galih",
      "Hendra",
      "Lestari",
      "Mahmud",
      "Novi",
      "Omar",
      "Putri",
      "Qomar",
    ],
    DKV: [
      "Hani",
      "Kamil",
      "Haryo",
      "Hesti",
      "Rani",
      "Sari",
      "Tomi",
      "Utami",
      "Vina",
      "Wira",
    ],
  };

  function searchJurusan() {
    const searchValue = document
      .getElementById("searchBox")
      .value.toLowerCase()
      .trim();
    const studentList = document.getElementById("studentList");

    studentList.innerHTML = "";

    if (searchValue === "") {
      return;
    }

    const results = new Set();

    // Search by program (jurusan)
    for (const className in students) {
      if (className.toLowerCase().includes(searchValue)) {
        students[className].forEach((student) => {
          results.add(
            `<li>${student} <span class="program-tag">${className}</span></li>`
          );
        });
      }
    }

    // Search by student name
    for (const className in students) {
      students[className].forEach((student) => {
        if (student.toLowerCase().includes(searchValue)) {
          results.add(
            `<li>${student} <span class="program-tag">${className}</span></li>`
          );
        }
      });
    }

    // Update the list with results
    if (results.size > 0) {
      studentList.innerHTML = Array.from(results).join("");
    } else {
      studentList.innerHTML =
        '<li class="no-results">Tidak ada hasil yang ditemukan</li>';
    }
  }

  // Optional: Initialize the list with all students
  window.onload = function () {
    const allResults = [];
    for (const className in students) {
      students[className].forEach((student) => {
        allResults.push(
          `<li>${student} <span class="program-tag">${className}</span></li>`
        );
      });
    }
    document.getElementById("studentList").innerHTML = allResults.join("");
  };