<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Starlink Aktieninfo – Bootstrap + JS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            padding-top: 20px;
            background-color: #f8f9fa;
        }
        .accordion-button::after {
            content: "⮟";
            font-size: 1.2rem;
            transform: rotate(0deg);
            transition: transform 0.3s ease;
        }
        .accordion-button.collapsed::after {
            transform: rotate(-90deg);
        }
        .header-img {
            width: 100%;
            border-radius: 12px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center mb-4">🚀 Starlink Aktie – Informationen & Sicherheit</h1>

    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Starlink_Mission_%2849155247126%29.jpg/1280px-Starlink_Mission_%2849155247126%29.jpg"
         alt="Starlink Satellitenstart"
         class="header-img img-fluid">

    <div class="accordion" id="starlinkAccordion">

        <!-- Abschnitt 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                    🚫 1. Starlink ist nicht börsennotiert
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#starlinkAccordion">
                <div class="accordion-body">
                    <ul>
                        <li>Starlink ist ein Tochterunternehmen von SpaceX, das wiederum privat geführt ist.</li>
                        <li>Du kannst keine Starlink-Aktie kaufen oder geschenkt bekommen, weil sie nicht an der Börse notiert ist.</li>
                        <li>Ein Börsengang (IPO) könnte in Zukunft kommen, aber sicher nicht kostenlos.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Abschnitt 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                    🛑 2. Vorsicht vor Betrug!
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#starlinkAccordion">
                <div class="accordion-body">
                    <ul>
                        <li>Vorsicht vor Webseiten, die kostenlose Starlink-Aktien versprechen – das ist meist Betrug.</li>
                        <li>Oft sollen persönliche Daten oder Gebühren abgegeben werden – Finger weg!</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Abschnitt 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                    ✅ 3. Legale Alternativen
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#starlinkAccordion">
                <div class="accordion-body">
                    <p>Hier ein Überblick über Plattformen mit echter Aktien-Prämie:</p>
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Plattform</th>
                                <th>Was du bekommst</th>
                                <th>Bedingungen</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Trade Republic</td>
                                <td>10–50 € Aktien-Bonus</td>
                                <td>Erste Einzahlung</td>
                            </tr>
                            <tr>
                                <td>Scalable Capital</td>
                                <td>ETF-/Aktienanteile</td>
                                <td>Nur für Neukunden</td>
                            </tr>
                            <tr>
                                <td>eToro / Robinhood</td>
                                <td>Teilweise Gratisaktien</td>
                                <td>Nur in bestimmten Ländern</td>
                            </tr>
                        </tbody>
                    </table>
                    <p><strong>Hinweis:</strong> Starlink-Aktien sind nicht darunter – es sind allgemeine Aktienangebote.</p>
                </div>
            </div>
        </div>

        <!-- Abschnitt 4 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                    🔭 Was du tun kannst
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#starlinkAccordion">
                <div class="accordion-body">
                    <ul>
                        <li>Warte auf einen IPO – Elon Musk hat das mehrfach in Aussicht gestellt.</li>
                        <li>Investiere alternativ in SpaceX-nahe Fonds – meist aber nur für institutionelle Investoren.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Abschnitt 5 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                    📬 Bleib informiert!
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#starlinkAccordion">
                <div class="accordion-body">
                    <p>Ich halte dich gerne auf dem Laufenden:</p>
                    <ul>
                        <li>Wenn der IPO von Starlink offiziell angekündigt wird</li>
                        <li>Wenn es seriöse Investmentmöglichkeiten gibt</li>
                        <li>Und wenn du lernen willst, mit kleinem Budget zu investieren</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <footer class="text-center mt-5 mb-4 text-muted">
        &copy; 2025 – Bereitgestellt durch ChatGPT | Keine Anlageberatung
    </footer>
</div>

<!-- Bootstrap 5 JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>