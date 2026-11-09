/* ==========================================================
   Calder Dental Studio — main.js
   No dependencies. Edit OPENING_HOURS to match your clinic.
   ========================================================== */

// 0 = Sunday ... 6 = Saturday. Use null for closed days. Times are 24h "HH:MM".
const OPENING_HOURS = {
  1: ["08:00", "18:00"], // Monday
  2: ["08:00", "18:00"], // Tuesday
  3: ["08:00", "19:30"], // Wednesday
  4: ["08:00", "18:00"], // Thursday
  5: ["08:00", "16:00"], // Friday
  6: ["09:00", "13:00"], // Saturday
  0: null                // Sunday
};
const DAY_NAMES = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
const WEEK_ORDER = [1, 2, 3, 4, 5, 6, 0];

/* ---------- Helpers ---------- */
const toMinutes = (hhmm) => {
  const [h, m] = hhmm.split(":").map(Number);
  return h * 60 + m;
};
const pretty = (hhmm) => {
  const [h, m] = hhmm.split(":").map(Number);
  const suffix = h >= 12 ? "pm" : "am";
  const h12 = ((h + 11) % 12) + 1;
  return m ? `${h12}:${String(m).padStart(2, "0")}${suffix}` : `${h12}${suffix}`;
};
const range = (hours) => (hours ? `${pretty(hours[0])} – ${pretty(hours[1])}` : "Closed");

/* ---------- Mobile navigation ---------- */
const toggle = document.querySelector(".nav-toggle");
const nav = document.getElementById("site-nav");
if (toggle && nav) {
  toggle.addEventListener("click", () => {
    const open = toggle.getAttribute("aria-expanded") === "true";
    toggle.setAttribute("aria-expanded", String(!open));
    nav.classList.toggle("open", !open);
  });
  nav.addEventListener("click", (e) => {
    if (e.target.closest("a")) {
      toggle.setAttribute("aria-expanded", "false");
      nav.classList.remove("open");
    }
  });
}

/* ---------- Open now / today's hours ---------- */
const now = new Date();
const today = now.getDay();
const card = document.querySelector("[data-hours]");
if (card) {
  const hours = OPENING_HOURS[today];
  const mins = now.getHours() * 60 + now.getMinutes();
  const isOpen = hours && mins >= toMinutes(hours[0]) && mins < toMinutes(hours[1]);
  card.classList.toggle("is-open", Boolean(isOpen));
  card.querySelector("[data-status]").textContent = isOpen ? "Open now" : "Closed now";

  let line = `Today: ${range(hours)}`;
  if (!isOpen) {
    // Find the next opening day
    for (let i = 1; i <= 7; i++) {
      const d = (today + i) % 7;
      if (hours && mins < toMinutes(hours[0])) { line = `Opens today at ${pretty(hours[0])}`; break; }
      if (OPENING_HOURS[d]) {
        line = `Opens ${i === 1 ? "tomorrow" : DAY_NAMES[d]} at ${pretty(OPENING_HOURS[d][0])}`;
        break;
      }
    }
  }
  card.querySelector("[data-today]").textContent = line;
}

/* ---------- Opening hours table ---------- */
const tbody = document.querySelector("[data-hours-table] tbody");
if (tbody) {
  WEEK_ORDER.forEach((d) => {
    const tr = document.createElement("tr");
    if (d === today) tr.className = "today";
    tr.innerHTML = `<th scope="row">${DAY_NAMES[d]}</th><td>${range(OPENING_HOURS[d])}</td>`;
    tbody.appendChild(tr);
  });
}

/* ---------- Booking form ----------
   Front-end validation only. To receive requests by email, set the form's
   action to a form service (Formspree, Netlify Forms, Getform, etc.) and
   remove e.preventDefault() — see documentation.html. */
const form = document.querySelector("[data-book-form]");
if (form) {
  const rules = {
    name: (v) => v.trim().length >= 2,
    phone: (v) => v.replace(/\D/g, "").length >= 7,
    email: (v) => v.trim() === "" || /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v.trim())
  };

  const check = (input) => {
    const ok = rules[input.name](input.value);
    input.closest(".field").classList.toggle("invalid", !ok);
    input.setAttribute("aria-invalid", String(!ok));
    return ok;
  };

  Object.keys(rules).forEach((name) => {
    const input = form.elements[name];
    input.addEventListener("blur", () => check(input));
    input.addEventListener("input", () => {
      if (input.closest(".field").classList.contains("invalid")) check(input);
    });
  });

  form.addEventListener("submit", (e) => {
    const results = Object.keys(rules).map((n) => check(form.elements[n]));
    const firstBad = Object.keys(rules).find((n, i) => !results[i]);
    if (firstBad) {
      e.preventDefault();
      form.elements[firstBad].focus();
      return;
    }
    if (!form.getAttribute("action")) {
      // Demo mode: no backend configured
      e.preventDefault();
      form.querySelector(".form-success").hidden = false;
      form.reset();
    }
  });
}

/* ---------- Footer year ---------- */
document.querySelectorAll("[data-year]").forEach((el) => (el.textContent = now.getFullYear()));
