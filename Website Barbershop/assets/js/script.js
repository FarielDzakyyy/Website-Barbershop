"use strict";

// Jalankan hanya di appointment.php
document.addEventListener("DOMContentLoaded", function () {
  if (!window.location.pathname.includes("appointment.php")) return;

  const appointmentForm = document.getElementById("appointmentForm");
  const submitBtn = document.getElementById("submitBtn");

  appointmentForm.addEventListener("submit", function (e) {
    e.preventDefault();

    const nameInput = document.getElementById("nameInput");
    const emailInput = document.getElementById("emailInput");
    const phoneInput = document.getElementById("phoneInput");
    const serviceSelect = document.getElementById("serviceSelect");
    const dateInput = document.getElementById("dateInput");
    const timeInput = document.getElementById("timeInput");

    let isValid = true;

    // Validasi manual
    if (nameInput.value.trim() === "") {
      nameInput.style.borderColor = "#e74c3c";
      isValid = false;
    } else {
      nameInput.style.borderColor = "";
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailInput.value.trim())) {
      emailInput.style.borderColor = "#e74c3c";
      isValid = false;
    } else {
      emailInput.style.borderColor = "";
    }

    if (phoneInput.value.trim().length < 8) {
      phoneInput.style.borderColor = "#e74c3c";
      isValid = false;
    } else {
      phoneInput.style.borderColor = "";
    }

    if (serviceSelect.value === "") {
      serviceSelect.style.borderColor = "#e74c3c";
      isValid = false;
    } else {
      serviceSelect.style.borderColor = "";
    }

    if (dateInput.value === "") {
      dateInput.style.borderColor = "#e74c3c";
      isValid = false;
    } else {
      dateInput.style.borderColor = "";
    }

    if (timeInput.value === "") {
      timeInput.style.borderColor = "#e74c3c";
      isValid = false;
    } else {
      timeInput.style.borderColor = "";
    }

    if (!isValid) {
      Swal.fire({
        icon: 'error',
        title: 'Form tidak valid',
        text: 'Mohon lengkapi semua isian dengan benar.',
        confirmButtonColor: '#ffc800'
      });
      return;
    }

    // Proses kirim form dengan SweetAlert loading
    Swal.fire({
      title: 'Memproses...',
      text: 'Mohon tunggu sebentar',
      didOpen: () => {
        Swal.showLoading();
      },
      allowOutsideClick: false
    });

    // Submit pakai AJAX ke appointment.php
    const formData = new FormData(appointmentForm);
    fetch("appointment.php", {
      method: "POST",
      body: formData
    })
      .then((response) => response.text())
      .then((res) => {
        Swal.close();
        if (res.includes("Appointment berhasil")) {
          Swal.fire({
            icon: "success",
            title: "Sukses!",
            text: "Appointment berhasil dibuat.",
            confirmButtonColor: "#28a745"
          }).then(() => {
            window.location.href = "booking.php";
          });
        } else if (res.includes("sudah dipesan")) {
          Swal.fire({
            icon: "warning",
            title: "Jadwal Penuh",
            text: "Waktu tersebut sudah dipesan. Pilih waktu lain.",
            confirmButtonColor: "#ffc800"
          });
        } else {
          Swal.fire({
            icon: "error",
            title: "Gagal",
            text: "Terjadi kesalahan. Silakan coba lagi.",
            confirmButtonColor: "#dc3545"
          });
        }
      })
      .catch((err) => {
        Swal.close();
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Gagal terhubung ke server.",
          confirmButtonColor: "#dc3545"
        });
        console.error(err);
      });
  });

  // Styling & animasi field
  const inputs = document.querySelectorAll(".input-field");
  inputs.forEach((input) => {
    input.addEventListener("input", function () {
      this.style.borderColor = "";
    });
  });

  document.getElementById("serviceSelect").addEventListener("change", function () {
    this.style.color = this.value !== "" ? "var(--white)" : "var(--white_50)";
  });

  const today = new Date().toISOString().split("T")[0];
  document.getElementById("dateInput").setAttribute("min", today);

  document.getElementById("timeInput").addEventListener("focus", function () {
    this.setAttribute("min", "09:00");
    this.setAttribute("max", "21:00");
  });

  // Animasi form
  const formElements = document.querySelectorAll(".input-group, .form-btn");
  formElements.forEach((element, index) => {
    element.style.opacity = "0";
    element.style.transform = "translateY(20px)";
    element.style.transition = `opacity 0.5s ease ${index * 0.1}s, transform 0.5s ease ${index * 0.1}s`;

    setTimeout(() => {
      element.style.opacity = "1";
      element.style.transform = "translateY(0)";
    }, 100);
  });
});

/**
 * NAVBAR & HEADER
 */
const addEventOnElem = function (elem, type, callback) {
  if (!elem) return;
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      elem[i]?.addEventListener(type, callback);
    }
  } else {
    elem?.addEventListener(type, callback);
  }
};

const navbar = document.querySelector("[data-navbar]");
const navToggler = document.querySelector("[data-nav-toggler]");
const navLinks = document.querySelectorAll("[data-nav-link]");
const toggleNavbar = () => navbar?.classList.toggle("active");
const closeNavbar = () => navbar?.classList.remove("active");
addEventOnElem(navToggler, "click", toggleNavbar);
addEventOnElem(navLinks, "click", closeNavbar);

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");
const headerActive = function () {
  if (window.scrollY > 100) {
    header?.classList.add("active");
    backTopBtn?.classList.add("active");
  } else {
    header?.classList.remove("active");
    backTopBtn?.classList.remove("active");
  }
};
addEventOnElem(window, "scroll", headerActive);

/**
 * FILTER
 */
const filterBtns = document.querySelectorAll("[data-filter-btn]");
const filterItems = document.querySelectorAll("[data-filter]");
let lastClickedFilterBtn = filterBtns[0];

const filter = function () {
  lastClickedFilterBtn.classList.remove("active");
  this.classList.add("active");
  lastClickedFilterBtn = this;

  for (let i = 0; i < filterItems.length; i++) {
    filterItems[i].style.opacity = "0";
    filterItems[i].style.transform = "translateY(20px)";
  }

  setTimeout(() => {
    for (let i = 0; i < filterItems.length; i++) {
      if (
        this.dataset.filterBtn === filterItems[i].dataset.filter ||
        this.dataset.filterBtn === "all"
      ) {
        filterItems[i].style.display = "block";
        filterItems[i].classList.add("active");

        setTimeout(() => {
          filterItems[i].style.opacity = "1";
          filterItems[i].style.transform = "translateY(0)";
          filterItems[i].style.transition = "all 0.3s ease";
        }, 50 * i);
      } else {
        filterItems[i].style.display = "none";
        filterItems[i].classList.remove("active");
      }
    }
  }, 300);
};

addEventOnElem(filterBtns, "click", filter);