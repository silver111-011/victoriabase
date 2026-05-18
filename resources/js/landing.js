/**
 * Nile Axis — Landing Page JS
 * public/js/landing.js
 */

document.addEventListener('DOMContentLoaded', () => {

    // ── Active nav link on scroll ──────────────────────────────────────────────
    const sections = document.querySelectorAll('section[id]');
    const navLinks  = document.querySelectorAll('.nav-links a');

    if (sections.length && navLinks.length) {
        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(s => {
                if (window.scrollY >= s.offsetTop - 120) current = s.id;
            });
            navLinks.forEach(a => {
                const href = a.getAttribute('href');
                a.classList.toggle('active', href === `#${current}` || href === `/#${current}`);
            });
        }, { passive: true });
    }

    // ── Wizard step click highlight ────────────────────────────────────────────
    document.querySelectorAll('.wstep').forEach(step => {
        step.addEventListener('click', () => {
            document.querySelectorAll('.wstep').forEach(s => s.classList.remove('active'));
            step.classList.add('active');
        });
    });

    // ── Wizard mockup org-type selector ───────────────────────────────────────
    document.querySelectorAll('.wm-org-opt').forEach(opt => {
        opt.addEventListener('click', () => {
            document.querySelectorAll('.wm-org-opt').forEach(o => o.classList.remove('selected'));
            opt.classList.add('selected');
        });
    });

});
