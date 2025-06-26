import "./bootstrap";
import { createIcons, icons } from "lucide";

createIcons({ icons });

// Initialize Lucide icons when DOM is loaded
document.addEventListener("DOMContentLoaded", () => {
    if (typeof lucide !== "undefined") {
        lucide.createIcons();
    }
});

// Re-initialize icons after any dynamic content changes
document.addEventListener("htmx:afterSwap", () => {
    if (typeof lucide !== "undefined") {
        lucide.createIcons();
    }
});

// Navbar scroll effect
window.addEventListener("scroll", () => {
    const navbar = document.getElementById("navbar");
    if (navbar) {
        if (window.scrollY > 50) {
            navbar.classList.add("shadow-lg");
        } else {
            navbar.classList.remove("shadow-lg");
        }
    }
});

// Smooth scroll for anchor links
document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute("href"));
            if (target) {
                target.scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                });
            }
        });
    });
});

// Form submission feedback
document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector('form[action*="contact"]');
    if (form) {
        form.addEventListener("submit", () => {
            const submitBtn = form.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.innerHTML = "Mengirim...";
                submitBtn.disabled = true;
            }
        });
    }
});
