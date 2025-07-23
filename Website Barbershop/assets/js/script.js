"use strict";

document.addEventListener("DOMContentLoaded", function () {
  if (!window.location.pathname.includes("appointment.php")) return;

  const form = document.getElementById("appointmentForm");
  const submitBtn = document.getElementById("submitBtn");

  const name = document.getElementById("nameInput");
  const email = document.getElementById("emailInput");
  const phone = document.getElementById("phoneInput");
  const service = document.getElementById("serviceSelect");
  const date = document.getElementById("dateInput");
  const time = document.getElementById("timeInput");

  if (!form || !submitBtn || !name || !email || !phone || !service || !date || !time) return;

  const resetBorder = (element) => element.style.borderColor = "";

  const validateForm = () => {
    let isValid = true;

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    const fields = [
      { el: name, valid: name.value.trim() !== "" },
      { el: email, valid: emailRegex.test(email.value.trim()) },
      { el: phone, valid: phone.value.trim().length >= 8 },
      { el: service, valid: service.value !== "" },
      { el: date, valid: date.value !== "" },
      { el: time, valid: time.value !== "" }
    ];

    fields.forEach(({ el, valid }) => {
      el.style.borderColor = valid ? "" : "#e74c3c";
      if (!valid) isValid = false;
    });

    return isValid;
  };

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    if (!validateForm()) {
      Swal.fire({
        icon: 'error',
        title: 'Form tidak valid',
        text: 'Mohon lengkapi semua isian dengan benar.',
        confirmButtonColor: '#ffc800'
      });
      return;
    }

    Swal.fire({
      title: 'Memproses...',
      text: 'Mohon tunggu sebentar',
      allowOutsideClick: false,
      didOpen: () => Swal.showLoading()
    });

    const formData = new FormData(form);

    fetch("appointment.php", {
      method: "POST",
      body: formData
    })
    .then(res => res.text())
    .then(res => {
      Swal.close();

      if (res.includes("Appointment berhasil")) {
        Swal.fire({
          icon: "success",
          title: "Sukses!",
          text: "Appointment berhasil dibuat.",
          confirmButtonColor: "#28a745"
        }).then(() => window.location.href = "booking.php");

      } else if (res.includes("Jadwal Tidak Tersedia")) {
        const htmlMsg = res.split("html: '")[1]?.split("',")[0] || "Slot waktu sudah penuh.";
        Swal.fire({
          icon: "warning",
          title: "Jadwal Tidak Tersedia",
          html: htmlMsg,
          confirmButtonColor: "#ffc800"
        });

      } else if (res.includes("Form tidak lengkap")) {
        Swal.fire({
          icon: "error",
          title: "Form tidak lengkap!",
          text: "Semua field wajib diisi.",
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
    .catch(() => {
      Swal.close();
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Gagal terhubung ke server.",
        confirmButtonColor: "#dc3545"
      });
    });
  });

  // Reset border saat input
  document.querySelectorAll(".input-field").forEach(input => {
    input.addEventListener("input", () => resetBorder(input));
  });

  // Warna select
  service.addEventListener("change", function () {
    this.style.color = this.value !== "" ? "var(--white)" : "var(--white_50)";
  });

  // Minimal tanggal hari ini
  const today = new Date().toISOString().split("T")[0];
  date.setAttribute("min", today);

  // Batas jam input
  time.addEventListener("focus", function () {
    this.setAttribute("min", "09:00");
    this.setAttribute("max", "21:00");
  });

  // Animasi masuk
  document.querySelectorAll(".input-group, .form-btn").forEach((el, i) => {
    el.style.opacity = "0";
    el.style.transform = "translateY(20px)";
    el.style.transition = `opacity 0.5s ease ${i * 0.1}s, transform 0.5s ease ${i * 0.1}s`;
    setTimeout(() => {
      el.style.opacity = "1";
      el.style.transform = "translateY(0)";
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
