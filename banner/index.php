<!DOCTYPE html>
<html lang="sq">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Gjenero Banner Profesional</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<style>
  * { 
    margin: 0; 
    padding: 0; 
    box-sizing: border-box; 
    font-family: 'Poppins', sans-serif; 
  }
  
  body { 
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    color: #333;
    -webkit-tap-highlight-color: transparent;
  }
  
  /* Header style nga sistemi i votave */
  .header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 30px 20px;
    text-align: center;
    border-radius: 15px 15px 0 0;
  }

  .header h1 {
    font-size: 28px;
    margin-bottom: 10px;
    font-weight: 600;
  }

  .header p {
    opacity: 0.9;
    font-size: 14px;
  }
  
  /* Mode switcher - përmirësuar */
  .mode-switcher {
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 1000;
  }
  
  .mode-btn {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border: none;
    padding: 12px 18px;
    border-radius: 25px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 600;
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
    transition: all 0.3s ease;
  }
  
  .mode-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(102, 126, 234, 0.6);
  }
  
  .container { 
    width: 100%; 
    max-width: 500px; 
    text-align: center;
    transition: all 0.3s ease;
  }
  
  /* Responsive design for different devices */
  @media (min-width: 1200px) {
    .container { max-width: 600px; }
  }
  
  @media (max-width: 768px) {
    .container { max-width: 100%; }
    .mode-switcher { top: 10px; right: 10px; }
  }
  
  @media (max-width: 480px) {
    body { padding: 10px; }
    .form-container { padding: 20px 15px; }
  }
  
  /* Projector mode */
  .projector-mode {
    max-width: 800px !important;
    font-size: 1.1em;
  }
  
  .projector-mode .form-container {
    padding: 40px;
  }
  
  .projector-mode .banner {
    transform: scale(1.05);
  }

  /* Form container - stil i ri nga votat */
  .form-container { 
    background: white; 
    padding: 30px; 
    border-radius: 0 0 15px 15px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    transition: transform 0.3s ease;
  }
  
  .form-container:hover { 
    transform: translateY(-5px); 
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
  }
  
  .form-title { 
    color: #2c3e50; 
    margin-bottom: 25px; 
    font-weight: 700; 
    font-size: 24px; 
    position: relative; 
    display: inline-block; 
  }
  
  .form-title:after { 
    content: ''; 
    position: absolute; 
    bottom: -8px; 
    left: 50%; 
    transform: translateX(-50%); 
    width: 50px; 
    height: 3px; 
    background: #667eea; 
    border-radius: 2px; 
  }
  
  /* Form elements - stil i ri nga votat */
  .form-group {
    margin-bottom: 20px;
    text-align: left;
  }

  .form-group label {
    display: block;
    margin-bottom: 8px;
    color: #333;
    font-weight: 500;
    font-size: 14px;
  }
  
  select, textarea, input, button { 
    width: 100%; 
    margin: 8px 0; 
    padding: 14px 18px; 
    border-radius: 10px; 
    border: 2px solid #e1e8ed; 
    font-size: 14px; 
    outline: none; 
    transition: all 0.3s ease; 
    background: #f8fafc; 
  }
  
  select:focus, textarea:focus, input:focus { 
    border-color: #667eea; 
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1); 
    background: white; 
  }
  
  /* Button styles nga votat */
  .btn {
    width: 100%;
    padding: 14px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 10px;
  }

  .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
  }

  .btn:active {
    transform: translateY(0);
  }

  .btn i { 
    margin-right: 8px; 
  }
  
  /* Banner styles */
  .banner { 
    margin-top: 25px; 
    border-radius: 20px; 
    overflow: hidden; 
    box-shadow: 0 15px 40px rgba(61, 60, 60, 0.15); 
    background: #718096; 
    text-align: center; 
    transition: all 0.4s ease; 
    display: none; 
    position: relative; 
    width: 100%; 
  }
  
  .banner-header { 
    position: relative; 
    height: 250px; 
    overflow: hidden; 
  }
  
  .banner img { 
    width: 100%; 
    height: 100%; 
    object-fit: cover; 
    transition: transform 0.7s ease; 
  }
  
  .banner-title { 
    color: white; 
    font-size: 32px; 
    font-weight: 700; 
    text-shadow: 0 2px 10px rgba(0,0,0,0.3); 
    letter-spacing: 1px; 
    margin-bottom: 10px; 
  }
  
  .banner-content { 
    padding: 25px; 
    background: #4a5568; 
    color: #e2e8f0; 
  }
  
  .company-name { 
    font-size: 18px; 
    font-weight: 600; 
    margin-bottom: 5px; 
  }
  
  .category-badge { 
    display: inline-block; 
    padding: 8px 20px; 
    border-radius: 25px; 
    font-weight: 600; 
    font-size: 14px; 
    margin: 10px 0; 
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
  }
  
  .price { 
    font-size: 24px; 
    font-weight: 700; 
    margin: 10px 0; 
    color: #2ecc71; 
  }
  
  .details { 
    display: flex; 
    justify-content: space-between; 
    margin: 15px 0; 
  }
  
  .detail-item { 
    flex: 1; 
    text-align: center; 
    padding: 0 10px; 
  }
  
  .detail-label { 
    font-size: 12px; 
    color: #a0aec0; 
  }
  
  .detail-value { 
    font-size: 16px; 
    font-weight: 600; 
  }
  
  .contact-info { 
    display: flex; 
    justify-content: center; 
    flex-wrap: wrap; 
    margin: 15px 0; 
  }
  
  .contact-item { 
    display: flex; 
    align-items: center; 
    margin: 5px 15px; 
    font-size: 14px; 
  }
  
  .contact-item i { 
    margin-right: 8px; 
    color: #667eea; 
  }
  
  /* File input - stil i ri */
  .file-input-container { 
    position: relative; 
    overflow: hidden; 
    display: inline-block; 
    width: 100%; 
  }
  
  .file-input { 
    position: absolute; 
    left: 0; 
    top: 0; 
    opacity: 0; 
    width: 100%; 
    height: 100%; 
    cursor: pointer; 
  }
  
  .file-input-label { 
    display: block; 
    padding: 20px; 
    background: #f8fafc; 
    border: 2px dashed #e1e8ed; 
    border-radius: 10px; 
    text-align: center; 
    cursor: pointer; 
    transition: all 0.3s ease; 
  }
  
  .file-input-label:hover { 
    background: #f0f4f8; 
    border-color: #667eea; 
  }
  
  .file-input-label i { 
    margin-right: 8px; 
    color: #667eea; 
    font-size: 24px;
  }
  
  /* Download buttons - stil i ri */
  .download-btn { 
    display: inline-block; 
    margin: 10px 5px; 
    padding: 12px 25px; 
    background: linear-gradient(135deg, #9b59b6, #8e44ad); 
    color: white; 
    border-radius: 25px; 
    text-decoration: none; 
    font-weight: 600; 
    transition: all 0.3s ease; 
    box-shadow: 0 4px 15px rgba(155, 89, 182, 0.3); 
    border: none;
    cursor: pointer;
    font-size: 14px;
  }
  
  .download-btn:hover { 
    background: linear-gradient(135deg, #8e44ad, #7d3c98); 
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(155, 89, 182, 0.4);
  }
  
  .color-picker { 
    display: flex; 
    align-items: center; 
    margin: 10px 0; 
  }
  
  .color-picker label { 
    margin-right: 10px; 
    font-weight: 500; 
  }
  
  .color-input { 
    width: 50px !important; 
    height: 40px; 
    padding: 0 !important; 
    margin: 0 10px 0 0 !important; 
    border-radius: 5px;
    cursor: pointer;
  }
  
  .icon-selector { 
    display: flex; 
    flex-wrap: wrap; 
    justify-content: space-between; 
    margin: 10px 0; 
  }
  
  .icon-option { 
    width: 48%; 
    margin: 5px 0; 
    padding: 15px 10px; 
    border: 2px solid #e1e8ed; 
    border-radius: 10px; 
    cursor: pointer; 
    text-align: center; 
    transition: all 0.3s ease; 
    background: #f8fafc;
  }
  
  .icon-option.selected { 
    border-color: #667eea; 
    background: #f0f4f8; 
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.2);
  }
  
  .icon-option i { 
    font-size: 28px; 
    margin-bottom: 8px; 
    color: #667eea;
  }
  
  /* Loading animation - përmirësuar */
  .loading {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.8);
    z-index: 9999;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    color: white;
  }
  
  .loading-spinner {
    width: 60px;
    height: 60px;
    border: 4px solid rgba(255,255,255,0.3);
    border-radius: 50%;
    border-top-color: white;
    animation: spin 1s ease-in-out infinite;
    margin-bottom: 20px;
  }
  
  @keyframes spin {
    to { transform: rotate(360deg); }
  }
  
  /* Success message - stil i ri */
  .success-message {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: linear-gradient(135deg, #2ecc71, #27ae60);
    color: white;
    padding: 30px 40px;
    border-radius: 15px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.3);
    z-index: 1000;
    text-align: center;
    max-width: 400px;
    width: 90%;
  }

  /* New banner button - stil i ri */
  .new-banner-btn {
    background: linear-gradient(135deg, #e67e22, #d35400) !important;
  }

  .new-banner-btn:hover {
    background: linear-gradient(135deg, #d35400, #e67e22) !important;
  }

  /* Apply button in banner */
  .apply-btn {
    display: inline-block;
    margin: 15px 0 10px;
    padding: 12px 30px;
    background: linear-gradient(135deg, #2ecc71, #27ae60);
    color: white;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(46, 204, 113, 0.3);
  }

  .apply-btn:hover {
    background: linear-gradient(135deg, #27ae60, #219653);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(46, 204, 113, 0.4);
  }

  /* Job requirements - stil i ri */
  .job-requirements {
    background: #5a6578;
    border-radius: 10px;
    padding: 20px;
    margin: 20px 0;
    text-align: left;
    border-left: 4px solid #667eea;
  }

  .requirements-title {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    color: #e2e8f0;
  }

  .requirements-title i {
    margin-right: 8px;
    color: #667eea;
  }

  .requirements-list {
    list-style-type: none;
  }

  .requirements-list li {
    margin: 10px 0;
    padding-left: 25px;
    position: relative;
    color: #e2e8f0;
  }

  .requirements-list li:before {
    content: '•';
    color: #667eea;
    font-size: 20px;
    position: absolute;
    left: 8px;
    top: -2px;
  }

  .job-location {
    font-size: 16px;
    font-weight: 500;
    margin: 10px 0 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #e2e8f0;
  }

  .job-location i {
    margin-right: 8px;
    color: #667eea;
  }
</style>
</head>
<body>

<!-- Loading overlay -->
<div class="loading" id="loading">
  <div class="loading-spinner"></div>
  <p>Duke gjeneruar bannerin...</p>
</div>

<!-- Success message -->
<div class="success-message" id="successMessage">
  <i class="fas fa-check-circle" style="font-size: 40px; margin-bottom: 10px;"></i>
  <h3>Banneri u shkarkua me sukses!</h3>
  <p>Faqja do të rifreskohet për të krijuar një banner të ri.</p>
</div>

<!-- New banner message -->
<div class="success-message" id="newBannerMessage" style="background: linear-gradient(135deg, #3498db, #2980b9); display: none;">
  <i class="fas fa-sync-alt" style="font-size: 40px; margin-bottom: 10px;"></i>
  <h3>Krijimi i Bannerit të Ri</h3>
  <p>Faqja po rifreskohet...</p>
</div>

<!-- Mode switcher -->
<div class="mode-switcher">
  <button class="mode-btn" id="modeToggle">
    <i class="fas fa-desktop"></i> Mode Projektor
  </button>
</div>

<div class="container" id="mainContainer">
  <!-- Header nga sistemi i votave -->
  <div class="header">
    <h1>Gjenero Banner Profesional</h1>
    <p>Krijo bannerë të përsosur për çdo rast</p>
  </div>

  <div class="form-container">
    <form method="POST" action="" enctype="multipart/form-data" id="bannerForm">
      <div class="form-group">
        <label for="category">Kategoria</label>
        <select name="category" id="category" required onchange="toggleFields()">
          <option value="">Zgjidh një kategori...</option>
          <option value="festa">Njoftime për Festa & Evente</option>
          <option value="marketing">Njoftime Komerciale / Marketing</option>
          <option value="edukim">Njoftime Edukative / Institucionale</option>
          <option value="kulture">Njoftime Kulturore / Sociale</option>
          <option value="personale">Njoftime Personale / Mesazhe</option>
        </select>
      </div>

      <!-- Fushat e përgjithshme -->
      <div class="form-group">
        <label for="title">Titulli</label>
        <input type="text" name="title" id="title" placeholder="Shkruaj titullin këtu..." required>
      </div>
      
      <!-- Fushat e kontaktit -->
      <div class="form-group">
        <label for="phone">Numri i telefonit (opsional)</label>
        <input type="tel" name="phone" id="phone" placeholder="+355 XX XXX XXXX">
      </div>

      <div class="form-group">
        <label for="email">Email (opsional)</label>
        <input type="email" name="email" id="email" placeholder="email@shembull.com">
      </div>
      
      <!-- Ngarkimi i fotove -->
      <div class="form-group">
        <label>Ngarko foto (opsional)</label>
        <div class="file-input-container">
          <label class="file-input-label" for="photo">
            <i class="fas fa-cloud-upload-alt"></i> Kliko për të zgjedhur foto
          </label>
          <input type="file" class="file-input" id="photo" name="photo" accept="image/*" onchange="previewImage(this)">
        </div>
        <div id="image-preview" style="display:none; margin-top:10px;">
          <img id="preview" src="#" alt="Parapamje e fotos" style="max-width:100%; max-height:200px; border-radius:10px;">
        </div>
      </div>
      
      <!-- Zgjedhja e ngjyrës së tekstit -->
      <div class="form-group">
        <div class="color-picker">
          <label for="text-color">Ngjyra e tekstit:</label>
          <input type="color" class="color-input" id="text-color" name="text-color" value="#ffffff">
        </div>
      </div>
      
      <!-- Fushat specifike për kategori -->
      <div id="festa-fields" style="display: none;">
        <div class="form-group">
          <label for="subtitle">Nëntitulli / Tekst shtesë</label>
          <input type="text" name="subtitle" id="subtitle" placeholder="P.sh. Data: 10 Nëntor, Ora: 18:00">
        </div>

        <div class="form-group">
          <label for="event-type">Lloji i eventit</label>
          <select name="event-type" id="event-type">
            <option value="">Zgjidh llojin e eventit</option>
            <option value="ditëlindje">Ditëlindje</option>
            <option value="dasmë">Dasmë</option>
            <option value="festa-fëmijësh">Festa fëmijësh</option>
            <option value="takim">Takim</option>
          </select>
        </div>

        <div class="form-group">
          <label for="location">Vendndodhja (opsionale)</label>
          <input type="text" name="location" id="location" placeholder="P.sh. Restorant XYZ">
        </div>

        <div class="form-group">
          <label for="button-text">Teksti i butonit</label>
          <input type="text" name="button-text" id="button-text" placeholder="P.sh. RSVP">
        </div>
        
        <div class="form-group">
          <label>Zgjidh ikonën</label>
          <div class="icon-selector">
            <div class="icon-option" onclick="selectIcon(this, 'balloon')">
              <i class="fas fa-birthday-cake"></i>
              <div>Tortë</div>
            </div>
            <div class="icon-option" onclick="selectIcon(this, 'gift')">
              <i class="fas fa-gift"></i>
              <div>Dhuratë</div>
            </div>
            <div class="icon-option" onclick="selectIcon(this, 'music')">
              <i class="fas fa-music"></i>
              <div>Muzikë</div>
            </div>
            <div class="icon-option" onclick="selectIcon(this, 'glass')">
              <i class="fas fa-glass-cheers"></i>
              <div>Festë</div>
            </div>
          </div>
          <input type="hidden" name="selected-icon" id="selected-icon" value="">
        </div>
      </div>
      
      <!-- Mbani pjesën tjetër të formës të njëjtë si më parë -->
      
      <button type="submit" class="btn"><i class="fas fa-magic"></i> Gjenero Banner</button>
    </form>
  </div>

  <div class="banner" id="banner-to-download" style="display: none;">
    <!-- Banner content will be generated by JavaScript -->
  </div>

  <div style="text-align:center; margin-top:20px; display: none;" id="download-buttons">
    <button class="download-btn" onclick="downloadBanner()"><i class="fas fa-download"></i> Shkarko Bannerin</button>
    <button class="download-btn" onclick="shareBanner()"><i class="fas fa-share-alt"></i> Ndaj Bannerin</button>
    <button class="download-btn new-banner-btn" onclick="createNewBanner()"><i class="fas fa-plus"></i> Krijo Banner të Ri</button>
  </div>
</div>

<script>
  // JavaScript kodi mbetet i njëjtë si në versionin e mëparshëm
  // Variabla për të ndjekur nëse është shkarkuar banneri
  let bannerDownloaded = false;
  
  // Funksioni për të ndryshuar mode-n
  function toggleProjectorMode() {
    const container = document.getElementById('mainContainer');
    const button = document.getElementById('modeToggle');
    
    if (container.classList.contains('projector-mode')) {
      container.classList.remove('projector-mode');
      button.innerHTML = '<i class="fas fa-desktop"></i> Mode Projektor';
    } else {
      container.classList.add('projector-mode');
      button.innerHTML = '<i class="fas fa-mobile-alt"></i> Mode Normal';
    }
  }
  
  // Funksioni për të krijuar banner të ri
  function createNewBanner() {
    // Shfaq mesazhin e ri
    const newBannerMessage = document.getElementById('newBannerMessage');
    newBannerMessage.style.display = 'block';
    
    // Rifresko faqen pas 1 sekonde
    setTimeout(() => {
      window.location.reload();
    }, 1000);
  }
  
  function toggleFields() {
    const category = document.getElementById('category').value;
    
    // Fshi të gjitha fushat specifike
    document.getElementById('festa-fields').style.display = 'none';
    document.getElementById('marketing-fields').style.display = 'none';
    document.getElementById('edukim-fields').style.display = 'none';
    document.getElementById('kulture-fields').style.display = 'none';
    document.getElementById('personale-fields').style.display = 'none';
    
    // Shfaq fushat e duhura
    if (category === 'festa') {
      document.getElementById('festa-fields').style.display = 'block';
    } else if (category === 'marketing') {
      document.getElementById('marketing-fields').style.display = 'block';
    } else if (category === 'edukim') {
      document.getElementById('edukim-fields').style.display = 'block';
    } else if (category === 'kulture') {
      document.getElementById('kulture-fields').style.display = 'block';
    } else if (category === 'personale') {
      document.getElementById('personale-fields').style.display = 'block';
    }
  }
  
  // Zgjedhja e ikonave
  function selectIcon(element, iconValue) {
    // Hiq seleksionin nga të gjitha ikonat
    const allIcons = document.querySelectorAll('.icon-option');
    allIcons.forEach(icon => {
      icon.classList.remove('selected');
    });
    
    // Shto seleksionin tek ikona e zgjedhur
    element.classList.add('selected');
    
    // Vendos vlerën e ikonës së zgjedhur në fushën e fshehur
    const category = document.getElementById('category').value;
    if (category === 'festa' || category === 'personale') {
      document.getElementById('selected-icon').value = iconValue;
    } else if (category === 'kulture') {
      document.getElementById('selected-icon-kulture').value = iconValue;
    }
  }
  
  // Parapamje e fotos së ngarkuar
  function previewImage(input) {
    const preview = document.getElementById('preview');
    const previewContainer = document.getElementById('image-preview');
    
    if (input.files && input.files[0]) {
      const reader = new FileReader();
      
      reader.onload = function(e) {
        preview.src = e.target.result;
        previewContainer.style.display = 'block';
      }
      
      reader.readAsDataURL(input.files[0]);
    } else {
      previewContainer.style.display = 'none';
    }
  }
  
  // Funksioni për të gjeneruar bannerin
  function generateBanner() {
    const category = document.getElementById('category').value;
    const title = document.getElementById('title').value;
    const phone = document.getElementById('phone').value;
    const email = document.getElementById('email').value;
    const textColor = document.getElementById('text-color').value;
    
    // Marrja e vlerave specifike për kategori
    const subtitle = document.getElementById('subtitle') ? document.getElementById('subtitle').value : '';
    const eventType = document.getElementById('event-type') ? document.getElementById('event-type').value : '';
    const location = document.getElementById('location') ? document.getElementById('location').value : '';
    const buttonText = document.getElementById('button-text') ? document.getElementById('button-text').value : '';
    const description = document.getElementById('description') ? document.getElementById('description').value : '';
    const marketingType = document.getElementById('marketing-type') ? document.getElementById('marketing-type').value : '';
    const validity = document.getElementById('validity') ? document.getElementById('validity').value : '';
    const activityType = document.getElementById('activity-type') ? document.getElementById('activity-type').value : '';
    const culturalType = document.getElementById('cultural-type') ? document.getElementById('cultural-type').value : '';
    const selectedIcon = document.getElementById('selected-icon') ? document.getElementById('selected-icon').value : '';
    
    // Imazhet sipas kategorive
    const categoryImages = {
      "festa": "https://cdn.pixabay.com/photo/2016/11/21/16/21/party-1846110_960_720.jpg",
      "marketing": "https://cdn.pixabay.com/photo/2015/05/15/14/47/computer-768696_960_720.jpg",
      "edukim": "https://cdn.pixabay.com/photo/2015/07/31/11/45/library-869061_960_720.jpg",
      "kulture": "https://cdn.pixabay.com/photo/2014/08/15/11/29/beethoven-418858_960_720.jpg",
      "personale": "https://cdn.pixabay.com/photo/2017/08/30/01/05/milky-way-2695569_960_720.jpg"
    };
    
    const img = categoryImages[category] || "https://cdn.pixabay.com/photo/2015/03/26/09/54/office-690182_960_720.jpg";
    const currentDate = new Date().toLocaleDateString('sq-AL', { day: 'numeric', month: 'long', year: 'numeric' });
    
    // Ngjyrat sipas kategorive
    const categoryColors = {
      "festa": ["#f1c40f", "#f39c12"],
      "marketing": ["#e74c3c", "#c0392b"],
      "edukim": ["#3498db", "#2980b9"],
      "kulture": ["#9b59b6", "#8e44ad"],
      "personale": ["#e67e22", "#d35400"]
    };
    
    const color = categoryColors[category] || ["#3498db", "#2980b9"];
    
    // Ikona sipas zgjedhjes
    let iconClass = '';
    if(selectedIcon == 'balloon') iconClass = 'fas fa-birthday-cake';
    if(selectedIcon == 'gift') iconClass = 'fas fa-gift';
    if(selectedIcon == 'music') iconClass = 'fas fa-music';
    if(selectedIcon == 'glass') iconClass = 'fas fa-glass-cheers';
    if(selectedIcon == 'camera') iconClass = 'fas fa-camera';
    if(selectedIcon == 'theater') iconClass = 'fas fa-theater-masks';
    if(selectedIcon == 'paint') iconClass = 'fas fa-palette';
    if(selectedIcon == 'heart') iconClass = 'fas fa-heart';
    if(selectedIcon == 'star') iconClass = 'fas fa-star';
    
    // Krijo HTML për banner
    let bannerHTML = `
      <div class="banner-header">
        <img src="${img}" alt="Foto">
      </div>
      <div class="banner-content" style="color: ${textColor};">
    `;
    
    if(category == 'festa') {
      bannerHTML += `
        <div class="banner-title">${title}</div>
        ${subtitle ? `<div class="company-name">${subtitle}</div>` : ''}
        <div class="category-badge">
          ${eventType == 'ditëlindje' ? 'DITËLINDJE' : 
            eventType == 'dasmë' ? 'DASMË' : 
            eventType == 'festa-fëmijësh' ? 'FESTA FËMIJËSH' : 'EVENT'}
        </div>
        ${location ? `<div class="job-location"><i class="fas fa-map-marker-alt"></i> ${location}</div>` : ''}
        ${selectedIcon && iconClass ? `<div style="font-size: 48px; margin: 15px 0;"><i class="${iconClass}"></i></div>` : ''}
        <div class="contact-info">
          ${phone ? `<div class="contact-item"><i class="fas fa-phone"></i> ${phone}</div>` : ''}
          ${email ? `<div class="contact-item"><i class="fas fa-envelope"></i> ${email}</div>` : ''}
        </div>
        ${buttonText ? `<a href="#" class="apply-btn">${buttonText}</a>` : ''}
      `;
    } else if(category == 'marketing') {
      bannerHTML += `
        <div class="banner-title">${title}</div>
        ${description ? `
          <div class="job-requirements">
            <div class="requirements-title"><i class="fas fa-info-circle"></i> Përshkrimi</div>
            <ul class="requirements-list">
              <li>${description}</li>
            </ul>
          </div>
        ` : ''}
        <div class="category-badge">
          ${marketingType == 'shitje' ? 'SHITJE' : 
            marketingType == 'promo' ? 'PROMO' : 
            marketingType == 'oferta' ? 'OFERTË' : 'MARKETING'}
        </div>
        ${validity ? `<div class="company-name">E vlefshme: ${validity}</div>` : ''}
        <div class="contact-info">
          ${phone ? `<div class="contact-item"><i class="fas fa-phone"></i> ${phone}</div>` : ''}
          ${email ? `<div class="contact-item"><i class="fas fa-envelope"></i> ${email}</div>` : ''}
        </div>
        ${buttonText ? `<a href="#" class="apply-btn">${buttonText}</a>` : ''}
      `;
    } else if(category == 'edukim') {
      bannerHTML += `
        <div class="banner-title">${title}</div>
        ${description ? `<div class="company-name">${description}</div>` : ''}
        <div class="category-badge">
          ${activityType == 'event-shkollor' ? 'EVENT SHKOLLOR' : 
            activityType == 'seminar' ? 'SEMINAR' : 
            activityType == 'konkurs' ? 'KONKURS' : 
            activityType == 'trajnim' ? 'TRAJNIM' : 'AKTIVITET'}
        </div>
        ${location ? `<div class="job-location"><i class="fas fa-map-marker-alt"></i> ${location}</div>` : ''}
        <div class="contact-info">
          ${phone ? `<div class="contact-item"><i class="fas fa-phone"></i> ${phone}</div>` : ''}
          ${email ? `<div class="contact-item"><i class="fas fa-envelope"></i> ${email}</div>` : ''}
        </div>
        ${buttonText ? `<a href="#" class="apply-btn">${buttonText}</a>` : ''}
      `;
    } else if(category == 'kulture') {
      bannerHTML += `
        <div class="banner-title">${title}</div>
        ${description ? `<div class="company-name">${description}</div>` : ''}
        <div class="category-badge">
          ${culturalType == 'koncert' ? 'KONCERT' : 
            culturalType == 'ekspozite' ? 'EKSpozitË' : 
            culturalType == 'festival' ? 'FESTIVAL' : 
            culturalType == 'teater' ? 'TEATER' : 'EVENT KULTUROR'}
        </div>
        ${location ? `<div class="job-location"><i class="fas fa-map-marker-alt"></i> ${location}</div>` : ''}
        ${selectedIcon && iconClass ? `<div style="font-size: 48px; margin: 15px 0;"><i class="${iconClass}"></i></div>` : ''}
        <div class="contact-info">
          ${phone ? `<div class="contact-item"><i class="fas fa-phone"></i> ${phone}</div>` : ''}
          ${email ? `<div class="contact-item"><i class="fas fa-envelope"></i> ${email}</div>` : ''}
        </div>
        ${buttonText ? `<a href="#" class="apply-btn">${buttonText}</a>` : ''}
      `;
    } else if(category == 'personale') {
      bannerHTML += `
        <div class="banner-title">${title}</div>
        ${description ? `<div class="company-name">${description}</div>` : ''}
        ${selectedIcon && iconClass ? `<div style="font-size: 48px; margin: 15px 0;"><i class="${iconClass}"></i></div>` : ''}
        <div class="contact-info">
          ${phone ? `<div class="contact-item"><i class="fas fa-phone"></i> ${phone}</div>` : ''}
          ${email ? `<div class="contact-item"><i class="fas fa-envelope"></i> ${email}</div>` : ''}
        </div>
        ${buttonText ? `<a href="#" class="apply-btn">${buttonText}</a>` : ''}
      `;
    }
    
    bannerHTML += `
        <div style="margin-top:10px; font-size:14px;"><em>Data: ${currentDate}</em></div>
      </div>
    `;
    
    // Vendos HTML në banner
    document.getElementById('banner-to-download').innerHTML = bannerHTML;
    document.getElementById('banner-to-download').style.display = 'block';
    document.getElementById('download-buttons').style.display = 'block';
  }
  
  // Shkarkimi i bannerit si foto
  function downloadBanner() {
    const loading = document.getElementById('loading');
    loading.style.display = 'flex';
    
    const banner = document.getElementById('banner-to-download');
    
    html2canvas(banner).then(function(canvas) {
      const link = document.createElement('a');
      link.download = 'banner-profesional.png';
      link.href = canvas.toDataURL('image/png');
      link.click();
      
      // Shfaq mesazhin e suksesit
      loading.style.display = 'none';
      const successMessage = document.getElementById('successMessage');
      successMessage.style.display = 'block';
      
      // Shëno që banneri është shkarkuar
      bannerDownloaded = true;
      
      // Rifresko faqen pas 3 sekondash
      setTimeout(() => {
        successMessage.style.display = 'none';
        window.location.reload();
      }, 3000);
    });
  }
  
  // Ndarja e bannerit
  function shareBanner() {
    const banner = document.getElementById('banner-to-download');
    
    html2canvas(banner).then(function(canvas) {
      canvas.toBlob(function(blob) {
        const file = new File([blob], "banner-profesional.png", { type: "image/png" });
        
        if (navigator.share && navigator.canShare({ files: [file] })) {
          navigator.share({
            files: [file],
            title: 'Banner Profesional',
            text: 'Shiko bannerin e krijuar'
          }).then(() => {
            // Rifresko faqen pas ndarjes
            setTimeout(() => {
              window.location.reload();
            }, 1000);
          }).catch(console.error);
        } else {
          // Nëse Web Share API nuk mbështetet, shkarko bannerin
          downloadBanner();
        }
      });
    });
  }
  
  // Event listeners
  document.addEventListener('DOMContentLoaded', function() {
    // Shto event listener për form submission
    document.getElementById('bannerForm').addEventListener('submit', function(e) {
      e.preventDefault();
      generateBanner();
    });
    
    // Shto event listener për butonin e mode-switcher
    document.getElementById('modeToggle').addEventListener('click', toggleProjectorMode);
    
    // Auto-toggle fields nëse ka kategori të zgjedhur
    toggleFields();
    
    // Detektim i pajisjes
    detectDevice();
  });
  
  // Funksioni për detektimin e pajisjes
  function detectDevice() {
    const userAgent = navigator.userAgent;
    const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(userAgent);
    const isTablet = /iPad|Android|Tablet/i.test(userAgent);
    
    if (isMobile && !isTablet) {
      console.log('Pajisje mobile e zbuluar');
    } else if (isTablet) {
      console.log('Tablet e zbuluar');
    } else {
      console.log('Desktop/PC e zbuluar');
    }
  }
</script>

</body>
</html>