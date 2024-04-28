<x-base-layout>
    <style >
        .m7{margin-right: 7px;}
        .horizontal{display: flex;}
        .vertical {
            height: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        p {
            color: #FFF;
            font-family: "FortySeven Micro NBP";
            font-size: 15px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }
        .deleted {
            color: red;
        }
    </style>
    <body class="bg-black text-white">
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div class="grid grid-cols-3 h-screen ml-12 mt-12">
        <div>
            <div class="horizontal">
                <div class="vertical m7">
            <img src="{{ asset('images/Fichier 2fleche 2.png') }}" alt="logo">
                </div>
            <span class="vertical font-neuebit text-2xl">
                FataOrgana Institute
            </span>
            </div>
            <p class="bob">
                Today, Site-■■, a research institute operated by FataOrgana, was thrust into a state of unprecedented turmoil following the manifestation of an anomalous celestial event. A unidentified comet, diverted from its projected trajectory moments before impact with Earth.
            </p>
            <p>
                In the wake of comet’s deviation, anomalous phenomena of varying degrees have been reported globally, suggesting a causal relationship between the celestial anomaly and the emergence of paranormal occurrences. Instances of spontaneous spatial distortions, reality breaches, and inexplicable manifestations have been documented, posing a significant containment and researching challenge for FataOrgana.
            </p>
            <p class="bob">
                At Site-■■, containment protocols have been escalated to maximum readiness levels in response to the escalating anomaly. Differents fields agents have been dispatched to affected areas to assess and documenting anomalous phenomena, while research teams work tirelessly to analyze samples and trying to find a solution to make the Earth peaceful again.
            </p>
            <p class="bob">
                As we confront this unprecedented threat, the importance of the Institute’s mission is underscored. We stand as humanity’s bulwark against the anomalous, safeguarding the veil of normalcy from the encroaching darkness of the unknown. In the face of uncertainty, our resolve remains steadfast—we will be the guardians of the unseen.
            </p>
        </div>
    </div>
    <script>
        function replaceWordsProgressively() {
            const paragraphs = document.querySelectorAll('p');

            paragraphs.forEach(paragraph => {
                let words = paragraph.textContent.split(' ');
                let indicesReplaced = new Set();  // Pour suivre les indices déjà remplacés

                function replaceWord() {
                    if (indicesReplaced.size < words.length) {
                        let randomIndex;
                        do {
                            randomIndex = Math.floor(Math.random() * words.length);
                        } while (indicesReplaced.has(randomIndex));  // Assurez-vous que l'indice n'a pas déjà été remplacé

                        indicesReplaced.add(randomIndex);  // Ajouter l'indice au Set des indices remplacés
                        words[randomIndex] = '<span class="deleted">DELETED</span>';  // Remplacer le mot par "DELETED" stylisé

                        paragraph.innerHTML = words.join(' ');  // Mettre à jour le HTML du paragraphe

                        setTimeout(replaceWord, 100);  // Répéter jusqu'à ce que tous les mots soient remplacés
                    }
                }

                replaceWord();
            });
        }

        window.onload = replaceWordsProgressively;
    </script>
    </body>
</x-base-layout>
