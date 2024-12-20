/*Поиск--------------------------------------------------------*/
let originalContent = null;

function saveOriginalContent() {
    if (!originalContent) {
        originalContent = document.body.innerphp;
    }
}

function restoreOriginalContent() {
    if (originalContent) {
        document.body.innerphp = originalContent;
    }
}

function findText(event) {
    if (event) {
        event.preventDefault();
    }

    saveOriginalContent();

    const query = document.getElementById('search-input').value.trim();
    if (!query) {
        restoreOriginalContent();
        return;
    }

    restoreOriginalContent();

    const body = document.body;
    const regex = new RegExp(query, 'gi');

    function highlightMatches(node) {
        if (node.nodeType === Node.TEXT_NODE) {
            const text = node.nodeValue;
            if (regex.test(text)) {
                const highlightedphp = text.replace(regex, match => `<span class="highlight">${match}</span>`);
                const tempDiv = document.createElement('div');
                tempDiv.innerphp = highlightedphp;

                while (tempDiv.firstChild) {
                    node.parentNode.insertBefore(tempDiv.firstChild, node);
                }
                node.parentNode.removeChild(node);
            }
        } else if (node.nodeType === Node.ELEMENT_NODE && node.tagName !== "SCRIPT" && node.tagName !== "STYLE") {
            node.childNodes.forEach(highlightMatches);
        }
    }

    body.childNodes.forEach(highlightMatches);
}
