<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<style>
:root{
  --r:0px;
  --bs-border-radius:0;--bs-border-radius-sm:0;--bs-border-radius-lg:0;--bs-border-radius-xl:0;--bs-border-radius-pill:0;
  --bs-primary:#0f766e;--bs-primary-rgb:15,118,110;
  --bs-link-color:#0f766e;--bs-link-hover-color:#115e59;
  --bs-body-font-family:'Inter',system-ui,sans-serif;
  --ink:#111827;--muted:#6b7280;--line:#d1d5db;--bg:#f3f4f6;--accent:#0f766e;--accent-dark:#115e59;
}
*{border-radius:0!important}
body{background:var(--bg);color:var(--ink);font-size:.92rem}
h3,h5,h2{font-weight:700;letter-spacing:-.01em}

/* top bar */
.topbar{background:var(--ink);border-bottom:3px solid var(--accent)}
.topbar .wrap{max-width:1180px;margin:0 auto;padding:0 1.2rem;display:flex;align-items:center;height:58px;gap:2rem}
.brand{color:#fff;font-weight:700;text-decoration:none;letter-spacing:.02em;display:flex;align-items:center;gap:.5rem;text-transform:uppercase;font-size:.95rem}
.brand i{color:#2dd4bf}
.nav-l{display:flex;gap:.2rem;flex:1;height:100%}
.nav-l a{color:#9ca3af;text-decoration:none;display:flex;align-items:center;gap:.45rem;padding:0 1rem;font-weight:500;border-bottom:3px solid transparent;margin-bottom:-3px}
.nav-l a:hover{color:#fff}
.nav-l a.active{color:#fff;border-bottom-color:#2dd4bf}
.who{color:#9ca3af;display:flex;align-items:center;gap:.9rem}
.who b{color:#fff;font-weight:600}
.main{max-width:1180px;margin:0 auto;padding:1.8rem 1.2rem}
@media(max-width:760px){.topbar .wrap{flex-wrap:wrap;height:auto;padding:.7rem 1rem;gap:.7rem}.nav-l{order:3;width:100%;flex:none;height:40px}.who b{display:none}}

/* components */
.card{border:1px solid var(--line);box-shadow:none;background:#fff}
.card-header{background:#fff;border-bottom:2px solid var(--ink);padding:.9rem 1.3rem}
.card-body{padding:1.4rem}
.form-control,.form-select{border:1px solid #9ca3af;padding:.55rem .8rem;background:#fff}
.form-control:focus,.form-select:focus{border-color:var(--accent);box-shadow:0 0 0 2px rgba(15,118,110,.25)}
.form-label{font-weight:600;font-size:.74rem;color:#374151;text-transform:uppercase;letter-spacing:.06em}
.btn{font-weight:600;padding:.5rem 1.1rem;text-transform:uppercase;letter-spacing:.05em;font-size:.76rem}
.btn-sm{padding:.28rem .6rem}
.btn-primary,.btn-success{background:var(--accent);border-color:var(--accent);color:#fff}
.btn-primary:hover,.btn-success:hover{background:var(--accent-dark);border-color:var(--accent-dark)}
.btn-info{background:var(--ink);border-color:var(--ink)}
.btn-info:hover{background:#000;border-color:#000}
.btn-secondary{background:#fff;border-color:#9ca3af;color:#374151}
.btn-secondary:hover{background:#e5e7eb;border-color:#6b7280;color:#111}
.btn-outline-primary,.btn-outline-success,.btn-outline-danger,.btn-outline-secondary{background:#fff}
.btn-outline-primary{--bs-btn-color:#1d4ed8;--bs-btn-border-color:#1d4ed8;--bs-btn-hover-bg:#1d4ed8}
.btn-outline-success{--bs-btn-color:#0f766e;--bs-btn-border-color:#0f766e;--bs-btn-hover-bg:#0f766e}
.btn-outline-danger{--bs-btn-color:#b91c1c;--bs-btn-border-color:#b91c1c;--bs-btn-hover-bg:#b91c1c}
.btn-outline-secondary{--bs-btn-color:#374151;--bs-btn-border-color:#9ca3af}
.card .table{margin:0}
.table>:not(caption)>*>*{padding:.8rem 1rem;border-bottom:1px solid #e5e7eb}
.table thead th{background:var(--ink);color:#fff;font-size:.7rem;text-transform:uppercase;letter-spacing:.08em;border:0;font-weight:600}
.table-hover>tbody>tr:hover>*{background:#f0fdfa}
.badge{font-weight:600;padding:.4em .7em;text-transform:uppercase;letter-spacing:.04em;font-size:.68rem}
.badge.text-bg-primary{background:#ccfbf1!important;color:#115e59!important;border:1px solid #5eead4}
.badge.text-bg-info{background:#dbeafe!important;color:#1e40af!important;border:1px solid #93c5fd}
.badge.bg-primary{background:var(--accent)!important}
.badge.bg-secondary{background:var(--ink)!important}
.alert{border:1px solid;border-left-width:5px}
.alert-success{background:#ecfdf5;color:#065f46;border-color:#10b981}
.alert-danger{background:#fef2f2;color:#991b1b;border-color:#ef4444}
.page-link{margin:0 -1px 0 0;border:1px solid var(--line);color:var(--ink)}
.active>.page-link{background:var(--accent);border-color:var(--accent);color:#fff}
.list-group-item{padding:.85rem 1.3rem}

/* login / register */
.auth{min-height:100vh;display:flex;align-items:center;justify-content:center;padding:1.5rem;background:var(--bg)}
.auth-box{width:100%;max-width:420px;background:#fff;border:1px solid var(--line);border-top:5px solid var(--accent);padding:2rem}
.auth-brand{display:flex;align-items:center;gap:.5rem;font-weight:700;text-transform:uppercase;letter-spacing:.04em;margin-bottom:1.5rem}
.auth-brand i{color:var(--accent);font-size:1.4rem}
</style>
