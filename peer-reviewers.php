<?php 
  include_once('header.php');

?>
 <!---main body-->
<main>
    <div class="container-fluid cen-page-header">
      <div class="container">
        <div class="row" >
          <div class="page-header">
            <h1>Peer Reviewers</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="container">
      <div class="row my-3">
        <span><a href="#" class="cen-breadcrumbs"> Home</a> » 
                <a href="#" class="cen-breadcrumbs">Peer Reviewers</a> » 
               
        </span>
                
      </div>
      </div>
    </div>
  
    <div class="container-fluid">
      <div class="container">
        <div class="row my-2">
          
           <!-- Advance search-->
           <div class="journal-item">
                     
                <div class="row my-4 ">
                  <div class="col-sm-3">
                    <h5 class="fw-bold">Advanced Search</h5> 
                    <div class="specDiv">
                            <div class="py-3" >Specialization</div>
                            <div class="docInputs">
                                <select id="doctorSpecialty" style="width: 95%" onchange="changeFunc();" class="cen-bg-darkgrey">
                                <option value=""></option><option value="PULMO">ADULT PULMONARY MEDICINE</option>
                                <option value="ALLER">ALLERGOLOGY IMMUNOLOGY</option>
                                <option value="ANAPAT">ANATOMIC PATHOLOGY</option>
                                <option value="ANES">ANESTHESIOLOGY</option>
                                <option value="CARDIO">CARDIOLOGY</option>
                                <option value="EPIDEM">CLINICAL EPIDEMIOLOGY</option
                                ><option value="CLIN">CLINICAL NUTRITION</option>
                                <option value="CLIPAT">CLINICAL PATHOLOGY</option>
                                <option value="CQI">CLINICAL QUALITY IMPROVEMENT</option>
                                <option value="COMPMED">COMPLEMENTARY MEDICINE</option>
                                <option value="CRIT">CRITICAL CARE</option>
                                <option value="DENSUR">DENTISTRY AND ORAL SURGERY</option>
                                <option value="DERMA">DERMATOLOGY</option>
                                <option value="ERMED">EMERGENCY MEDICINE</option>
                                <option value="ENDOC">ENDOCRINOLOGY</option>
                                <option value="GASTRO">GASTROENTEROLOGY</option>
                                <option value="GENPRACT">GENERAL PRACTITIONER</option>
                                <option value="GERIA">GERIATRIC MEDICINE</option>
                                <option value="HEMA">HEMATOLOGY</option>
                                <option value="HBOT">HYPERBARIC OXYGEN THERAPY</option>
                                <option value="INDI">INFECTIOUS DISEASE AND TROPICAL MEDICINE</option><option value="INTMED">INTERNAL MEDICINE</option>
                                <option value="LEMED">LEGAL MEDICINE AND JURISPRUDENCE</option>
                                <option value="MEDETH">MEDICAL ETHICS</option>
                                <option value="ONCO">MEDICAL ONCOLOGY</option>
                                <option value="NEPHRO">NEPHROLOGY</option>
                                <option value="NUERO">NEUROLOGY</option>
                                <option value="NUSCI">NEUROSCIENCES</option>
                                <option value="NEUSUR">NEUROSURGERY</option>
                                <option value="NUCMED">NUCLEAR MEDICINE</option>
                                <option value="OBGYNE">OBSTETRICS GYNECOLOGY</option>
                                <option value="ONCOL">ONCOLOGY</option>
                                <option value="OPHTHA">OPHTHALMOLOGY</option>
                                <option value="ORGTRAN">ORGAN TRANSPLANT</option>
                                <option value="ORSUR">ORTHOPEDIC SURGERY</option>
                                <option value="OTORHI">OTORHINOLARYNGOLOGY AND HEAD AND NECK SURGERY</option><option value="PAINMED">PAIN MANAGEMENT</option>
                                <option value="PARAMED">PARAMEDICAL</option>
                                <option value="PATHO">PATHOLOGY</option>
                                <option value="PEDIA">PEDIATRICS</option>
                                <option value="REHAB">PHYSICAL MEDICINE AND REHABILITATION</option><option value="PLAS">PLASTIC &amp; RECONSTRUCTIVE SURGERY</option>
                                <option value="PSYCH">PSYCHIATRY</option>
                                <option value="PSYCHO">PSYCHOLOGY</option>
                                <option value="PULMED">PULMONARY MEDICINE</option>
                                <option value="RADONCO">RADIATION ONCOLOGY</option>
                                <option value="RADIO">RADIOLOGY</option>
                                <option value="RHEU">RHEUMATOLOGY</option>
                                <option value="GENSUR">SURGERY</option>
                                <option value="URO">UROLOGY</option>
                                <option value="URO1">UROLOGY</option>
                                <option value="VASCU">VASCULAR MEDICINE</option></select>
                            </div>

                            <div class="py-3" >Sub-Specialization</div>	
                            <div >
                                <select id="doctorSubSpecialty" onkeydown="return false" style="width: 95%" class="cen-bg-darkgrey">
                                <option value=""></option>
                                <option id="PSYCH" class="hide" value="ADDICTION PSYCHIATRY">ADDICTION PSYCHIATRY</option>
                                <option id="PEDIA" class="hide" value="ADOLESCENT PEDIATRICS">ADOLESCENT PEDIATRICS</option>
                                <option id="PULMO" class="hide" value="ADULT BRONCHOSCOPY">ADULT BRONCHOSCOPY</option>
                                <option id="ERMED" class="hide" value="ADULT EMERGENCY MEDICINE">ADULT EMERGENCY MEDICINE</option>
                                <option id="HEMA" class="hide" value="ADULT HEMAONCOLOGY">ADULT HEMAONCOLOGY</option>
                                <option id="HEMA" class="hide" value="ADULT HEMATOLOGY">ADULT HEMATOLOGY</option>
                                <option id="NUERO" class="hide" value="ADULT NEUROLOGY">ADULT NEUROLOGY</option>
                                <option id="PARAMED" class="hide" value="ADULT PSYCHOLOGY">ADULT PSYCHOLOGY</option>
                                <option id="OBGYNE" class="hide" value="ADVANCED PELVIC SURGERY">ADVANCED PELVIC SURGERY</option>
                                <option id="ANES" class="hide" value="AMBULATORY ANESTHESIA">AMBULATORY ANESTHESIA</option>
                                <option id="PEDIA" class="hide" value="AMBULATORY PEDIATRICS">AMBULATORY PEDIATRICS</option>
                                <option id="PATHO" class="hide" value="ANATOMIC PATHOLOGY">ANATOMIC PATHOLOGY</option>
                                <option id="ORSUR" class="hide" value="ARTHROSCOPY AND SPORTS SURGERY">ARTHROSCOPY AND SPORTS SURGERY</option>
                                <option id="ANAPAT" class="hide" value="AUTOPSY AND FORENSIC PATHOLOGY">AUTOPSY AND FORENSIC PATHOLOGY</option>
                                <option id="GENSUR" class="hide" value="BARIATRIC SURGERY">BARIATRIC SURGERY</option>
                                <option id="CLIPAT" class="hide" value="BLOOD BANK AND TRANSFUSION">BLOOD BANK AND TRANSFUSION</option>
                                <option id="HEMA" class="hide" value="BONE MARROW TRANSPLANT">BONE MARROW TRANSPLANT</option>
                                <option id="ORSUR" class="hide" value="BONE/TISSUE BANKING">BONE/TISSUE BANKING</option>
                                <option id="RADIO" class="hide" value="BREAST IMAGING">BREAST IMAGING</option>
                                <option id="ANAPAT" class="hide" value="BREAST PATHOLOGY">BREAST PATHOLOGY</option>
                                <option id="GENSUR" class="hide" value="BREAST SURGERY">BREAST SURGERY</option>
                                <option id="GENSUR" class="hide" value="BURN SURGERY">BURN SURGERY</option>
                                <option id="CARDIO" class="hide" value="CARDIAC CATHETERIZATION">CARDIAC CATHETERIZATION</option>
                                <option id="CARDIO" class="hide" value="CARDIAC RADIOLOGY">CARDIAC RADIOLOGY</option>
                                <option id="CARDIO" class="hide" value="CARDIAC REHABILITATION">CARDIAC REHABILITATION</option>
                                <option id="GENSUR" class="hide" value="CARDIAC SURGERY">CARDIAC SURGERY</option>
                                <option id="CARDIO" class="hide" value="CARDIOVASCULAR CRITICAL CARE">CARDIOVASCULAR CRITICAL CARE</option>
                                <option id="OTORHI" class="hide" value="CARNIOMAXILLOFACIAL SURGERY">CARNIOMAXILLOFACIAL SURGERY</option>
                                <option id="ORSUR" class="hide" value="CARTILAGE TRANSPLANT SURGERY">CARTILAGE TRANSPLANT SURGERY</option>
                                <option id="OPHTHA" class="hide" value="CATARACT AND LENS SURGERY">CATARACT AND LENS SURGERY</option>
                                <option id="CLIPAT" class="hide" value="CELLULAR IMMUNOLOGY">CELLULAR IMMUNOLOGY</option>
                                <option id="NEUSUR" class="hide" value="CEREBROVASCULAR SURGERY">CEREBROVASCULAR SURGERY</option>
                                <option id="RADIO" class="hide" value="CHEST RADIOLOGY">CHEST RADIOLOGY</option>
                                <option id="PSYCH" class="hide" value="CHILD AND ADOLESCENT PSYCHIATRY">CHILD AND ADOLESCENT PSYCHIATRY</option>
                                <option id="PEDIA" class="hide" value="CHILD PROTECTION">CHILD PROTECTION</option>
                                <option id="OBGYNE" class="hide" value="CLIMACTERIC MEDICINE">CLIMACTERIC MEDICINE</option>
                                <option id="CLIPAT" class="hide" value="CLINICAL CHEMISTRY AND TOXICOLOGY">CLINICAL CHEMISTRY AND TOXICOLOGY</option>
                                <option id="CLIPAT" class="hide" value="CLINICAL MICROSCOPY AND PARASITOLOGY">CLINICAL MICROSCOPY AND PARASITOLOGY</option>
                                <option id="NUERO" class="hide" value="CLINICAL NEUROPHYSIOLOGY">CLINICAL NEUROPHYSIOLOGY</option>
                                <option id="PARAMED" class="hide" value="CLINICAL PSYCHOLOGY">CLINICAL PSYCHOLOGY</option>
                                <option id="PARAMED" class="hide" value="COGNITIVE PSYCHOLOGY">COGNITIVE PSYCHOLOGY</option>
                                <option id="GENSUR" class="hide" value="COLORECTAL SURGERY">COLORECTAL SURGERY</option>
                                <option id="PSYCH" class="hide" value="CONSULTATION-LIAISON PSYCHIATRY">CONSULTATION-LIAISON PSYCHIATRY</option>
                                <option id="OPHTHA" class="hide" value="CONTACT LENS">CONTACT LENS</option>
                                <option id="OPHTHA" class="hide" value="CORNEA AND EXTERNAL DISEASE">CORNEA AND EXTERNAL DISEASE</option>
                                <option id="DERMA" class="hide" value="COSMETIC AND DERMATOLOGIC SURGERY">COSMETIC AND DERMATOLOGIC SURGERY</option>
                                <option id="OBGYNE" class="hide" value="COSMETIC GYNECOLOGY">COSMETIC GYNECOLOGY</option>
                                <option id="ANES" class="hide" value="CRITICAL CARE ANESTHESIA">CRITICAL CARE ANESTHESIA</option>
                                <option id="INTMED" class="hide" value="CRITICAL CARE MEDICINE">CRITICAL CARE MEDICINE</option>
                                <option id="RADIO" class="hide" value="CT MRI">CT MRI</option>
                                <option id="ANAPAT" class="hide" value="CYTOPATHOLOGY">CYTOPATHOLOGY</option>
                                <option id="NUERO" class="hide" value="DEMENTIA">DEMENTIA</option>
                                <option id="DERMA" class="hide" value="DERMATOEPIDEMIOLOGY">DERMATOEPIDEMIOLOGY</option>
                                <option id="DERMA" class="hide" value="DERMATOLOGIC LASER SURGERY">DERMATOLOGIC LASER SURGERY</option>
                                <option id="DERMA" class="hide" value="DERMATOPATHOLOGY">DERMATOPATHOLOGY</option>
                                <option id="ANAPAT" class="hide" value="DERMATOPATHOLOGY">DERMATOPATHOLOGY</option>
                                <option id="DERMA" class="hide" value="DERMATOPHARMACOLOGY">DERMATOPHARMACOLOGY</option>
                                <option id="PEDIA" class="hide" value="DEVELOPMENTAL PEDIATRICS">DEVELOPMENTAL PEDIATRICS</option>
                                <option id="GASTRO" class="hide" value="DIAGNOSTIC AND THERAPEUTIC ENDOSCOPY">DIAGNOSTIC AND THERAPEUTIC ENDOSCOPY</option>
                                <option id="RADIO" class="hide" value="DIAGNOSTIC RADIOLOGY">DIAGNOSTIC RADIOLOGY</option>
                                <option id="CARDIO" class="hide" value="ECHOCARDIOGRAPHY">ECHOCARDIOGRAPHY</option>
                                <option id="GASTRO" class="hide" value="ELASTOGRAPHY">ELASTOGRAPHY</option>
                                <option id="CARDIO" class="hide" value="ELECTROPHYSIOLOGY AND CARDIAC PACING">ELECTROPHYSIOLOGY AND CARDIAC PACING</option>
                                <option id="DENSUR" class="hide" value="ENDODONTICS">ENDODONTICS</option>
                                <option id="GASTRO" class="hide" value="ENDOSCOPIC ULTRASOUND AND ERCP">ENDOSCOPIC ULTRASOUND AND ERCP</option>
                                <option id="URO" class="hide" value="ENDOUROLOGY">ENDOUROLOGY</option>
                                <option id="NEUSUR" class="hide" value="ENDOVASCULAR NEUROSURGERY">ENDOVASCULAR NEUROSURGERY</option>
                                <option id="DERMA" class="hide" value="ENVIRONMENTAL AND OCCUPATIONAL DERMATOLOGY">ENVIRONMENTAL AND OCCUPATIONAL DERMATOLOGY</option><option id="NUERO" class="hide" value="EPILEPSY">EPILEPSY</option>
                                <option id="GENSUR" class="hide" value="ESOPHAGEAL AND GASTROINTESTINAL SURGERY">ESOPHAGEAL AND GASTROINTESTINAL SURGERY</option><option id="OPHTHA" class="hide" value="EYE BANKING AND CORNEAL TRANSPLANT">EYE BANKING AND CORNEAL TRANSPLANT</option>
                                <option id="OTORHI" class="hide" value="FACIAL COSMETIC SURGERY">FACIAL COSMETIC SURGERY</option>
                                <option id="URO" class="hide" value="FEMALE UROLOGY">FEMALE UROLOGY</option>
                                <option id="ORSUR" class="hide" value="FOOT AND ANKLE SURGERY">FOOT AND ANKLE SURGERY</option>
                                <option id="NEUSUR" class="hide" value="FUNCTIONAL/EPILEPSY NEUROSURGERY">FUNCTIONAL/EPILEPSY NEUROSURGERY</option><option id="ANAPAT" class="hide" value="GASTROINTESTINAL AND LIVER PATHOLOGY">GASTROINTESTINAL AND LIVER PATHOLOGY</option>
                                <option id="PSYCH" class="hide" value="GENERAL ADULT PSYCHIATRY">GENERAL ADULT PSYCHIATRY</option>
                                <option id="PEDIA" class="hide" value="GENETICS">GENETICS</option>
                                <option id="PSYCH" class="hide" value="GERIATRIC PSYCHIATRY">GERIATRIC PSYCHIATRY</option>
                                <option id="OBGYNE" class="hide" value="GESTATIONAL TROPHOBLASTIC">GESTATIONAL TROPHOBLASTIC</option>
                                <option id="OPHTHA" class="hide" value="GLAUCOMA">GLAUCOMA</option>
                                <option id="OBGYNE" class="hide" value="GYNECOLOGIC MINIMALLY INVASIVE SURGERY (GYNECOLOGIC ENDOSCOPY AND LAPAROSCOPY)">GYNECOLOGIC MINIMALLY INVASIVE SURGERY (GYNECOLOGIC ENDOSCOPY AND LAPAROSCOPY)</option>
                                <option id="OBGYNE" class="hide" value="GYNECOLOGIC ONCOLOGY">GYNECOLOGIC ONCOLOGY</option>
                                <option id="ANAPAT" class="hide" value="GYNECOLOGIC PATHOLOGY">GYNECOLOGIC PATHOLOGY</option>
                                <option id="DERMA" class="hide" value="HAIR DISORDERS">HAIR DISORDERS</option>
                                <option id="ORSUR" class="hide" value="HAND SURGERY">HAND SURGERY</option>
                                <option id="PATHO" class="hide" value="HEAD AND NECK - ENDOCRINOLOGY">HEAD AND NECK - ENDOCRINOLOGY</option>
                                <option id="OTORHI" class="hide" value="HEAD AND NECK ONCOLOGIC SURGERY">HEAD AND NECK ONCOLOGIC SURGERY</option><option id="GENSUR" class="hide" value="HEAD AND NECK SURGERY">HEAD AND NECK SURGERY</option>
                                <option id="NUERO" class="hide" value="HEADACHE">HEADACHE</option>
                                <option id="OTORHI" class="hide" value="HEARING BALANCE DISORDER">HEARING BALANCE DISORDER</option>
                                <option id="CLIPAT" class="hide" value="HEMATOLOGY1">HEMATOLOGY1</option>
                                <option id="ANAPAT" class="hide" value="HEMATOPATHOLOGY">HEMATOPATHOLOGY</option>
                                <option id="HEMA" class="hide" value="HEMOPATHOLOGY">HEMOPATHOLOGY</option>
                                <option id="GENSUR" class="hide" value="HEPATOBILIARY SURGERY">HEPATOBILIARY SURGERY</option>
                                <option id="GASTRO" class="hide" value="HEPATOLOGY">HEPATOLOGY</option>
                                <option id="CARDIO" class="hide" value="HYPERTENSION">HYPERTENSION</option>
                                <option id="NEUSUR" class="hide" value="IMAGE-GUIDED NEUROSURGERY">IMAGE-GUIDED NEUROSURGERY</option>
                                <option id="DERMA" class="hide" value="IMMUNODERMATOLOGY">IMMUNODERMATOLOGY</option>
                                <option id="ANAPAT" class="hide" value="IMMUNOPATHOLOGY">IMMUNOPATHOLOGY</option>
                                <option id="DENSUR" class="hide" value="IMPLANT DENTISTRY">IMPLANT DENTISTRY</option>
                                <option id="PULMO" class="hide" value="INTERSTITIAL LUNG DISEASE">INTERSTITIAL LUNG DISEASE</option>
                                <option id="CARDIO" class="hide" value="INTERVENTIONAL CARDIOLOGY">INTERVENTIONAL CARDIOLOGY</option>
                                <option id="GASTRO" class="hide" value="INTERVENTIONAL HEPATOLOGY">INTERVENTIONAL HEPATOLOGY</option>
                                <option id="PULMO" class="hide" value="INTERVENTIONAL PULMONOLOGY">INTERVENTIONAL PULMONOLOGY</option>
                                <option id="RADIO" class="hide" value="INTERVENTIONAL RADIOLOGY">INTERVENTIONAL RADIOLOGY</option>
                                <option id="CARDIO" class="hide" value="INVASIVE CARDIOLOGY">INVASIVE CARDIOLOGY</option>
                                <option id="ORSUR" class="hide" value="JOINT REPLACEMENT SURGERY">JOINT REPLACEMENT SURGERY</option>
                                <option id="OBGYNE" class="hide" value="LACTATION MEDICINE">LACTATION MEDICINE</option>
                                <option id="PEDIA" class="hide" value="LACTATION MEDICINE">LACTATION MEDICINE</option>
                                <option id="URO" class="hide" value="LAPAROSCOPIC UROLOGY">LAPAROSCOPIC UROLOGY</option>
                                <option id="OTORHI" class="hide" value="LARYNGOLOGY AND PHONIATICS">LARYNGOLOGY AND PHONIATICS</option>
                                <option id="OTORHI" class="hide" value="LARYNGOLOGY BRONCO-ESOPHAGOLOGY">LARYNGOLOGY BRONCO-ESOPHAGOLOGY</option><option id="ORSUR" class="hide" value="LIMB LENGTHENING AND RECONSTRUCTION SURGERY">LIMB LENGTHENING AND RECONSTRUCTION SURGERY</option><option id="OPHTHA" class="hide" value="LOW VISION">LOW VISION</option>
                                <option id="URO" class="hide" value="MALE INFERTILITY/ANDROLOGY">MALE INFERTILITY/ANDROLOGY</option>
                                <option id="GASTRO" class="hide" value="MANOMETRY">MANOMETRY</option>
                                <option id="OBGYNE" class="hide" value="MATERNAL AND FETAL MEDICINE (PERINATOLOGY)">MATERNAL AND FETAL MEDICINE (PERINATOLOGY)</option>
                                <option id="OTORHI" class="hide" value="MAXILLOFACIAL PROSTHETICS">MAXILLOFACIAL PROSTHETICS</option>
                                <option id="PAINMED" class="hide" value="MEDICAL ACUPUNCTURE">MEDICAL ACUPUNCTURE</option>
                                <option id="NUERO" class="hide" value="MEDICAL NEUROONCOLOGY">MEDICAL NEUROONCOLOGY</option>
                                <option id="INDI" class="hide" value="MICROBIOLOGY">MICROBIOLOGY</option>
                                <option id="CLIPAT" class="hide" value="MICROBIOLOGY - BACTERIOLOGY">MICROBIOLOGY - BACTERIOLOGY</option>
                                <option id="CLIPAT" class="hide" value="MICROBIOLOGY - MYCOLOGY">MICROBIOLOGY - MYCOLOGY</option>
                                <option id="CLIPAT" class="hide" value="MICROBIOLOGY - VIROLOGY">MICROBIOLOGY - VIROLOGY</option>
                                <option id="DERMA" class="hide" value="MICROGRAPHIC SURGERY (MOHS)">MICROGRAPHIC SURGERY (MOHS)</option>
                                <option id="ORSUR" class="hide" value="MICROVASCULAR AND BRACHIAL PLEXUS SURGERY">MICROVASCULAR AND BRACHIAL PLEXUS SURGERY</option>
                                <option id="OTORHI" class="hide" value="MICROVASCULAR RECONSTRUCTIVE SURGERY">MICROVASCULAR RECONSTRUCTIVE SURGERY</option><option id="NEUSUR" class="hide" value="MINIMALLY INVASIVE NEUROSURGERY (ENDOSCOPIC NEUROSURGERY)">MINIMALLY INVASIVE NEUROSURGERY (ENDOSCOPIC NEUROSURGERY)</option>
                                <option id="GENSUR" class="hide" value="MINIMALLY INVASIVE SURGERY">MINIMALLY INVASIVE SURGERY</option>
                                <option id="GASTRO" class="hide" value="MOTILITY STUDY">MOTILITY STUDY</option>
                                <option id="NUERO" class="hide" value="MOVEMENT DISORDERS">MOVEMENT DISORDERS</option>
                                <option id="ORSUR" class="hide" value="MUSCULOSKELETAL ONCOLOGY">MUSCULOSKELETAL ONCOLOGY</option>
                                <option id="RADIO" class="hide" value="MUSCULOSKELETAL RADIOLOGY">MUSCULOSKELETAL RADIOLOGY</option>
                                <option id="PARAMED" class="hide" value="MUSIC THERAPY">MUSIC THERAPY</option>
                                <option id="PEDIA" class="hide" value="NEONATOLOGY">NEONATOLOGY</option>
                                <option id="NUERO" class="hide" value="NEURO CRITICAL CARE">NEURO CRITICAL CARE</option>
                                <option id="NUERO" class="hide" value="NEURO-ONCOLOGY">NEURO-ONCOLOGY</option>
                                <option id="OPHTHA" class="hide" value="NEURO-OPHTHALMOLOGY">NEURO-OPHTHALMOLOGY</option>
                                <option id="OTORHI" class="hide" value="NEURO-OTOLOGY">NEURO-OTOLOGY</option>
                                <option id="NUERO" class="hide" value="NEURODEVELOPMENTAL DISORDERS">NEURODEVELOPMENTAL DISORDERS</option>
                                <option id="PEDIA" class="hide" value="NEURODEVELOPMENTAL PEDIATRICS">NEURODEVELOPMENTAL PEDIATRICS</option>
                                <option id="NUERO" class="hide" value="NEUROMUSCULAR DISEASE">NEUROMUSCULAR DISEASE</option>
                                <option id="ANAPAT" class="hide" value="NEUROPATHOLOGY">NEUROPATHOLOGY</option>
                                <option id="PARAMED" class="hide" value="NEUROPSYCHOLOGY">NEUROPSYCHOLOGY</option>
                                <option id="NEUSUR" class="hide" value="NEURORADIOLOGY">NEURORADIOLOGY</option>
                                <option id="RADIO" class="hide" value="NEURORADIOLOGY RADIO">NEURORADIOLOGY RADIO</option>
                                <option id="ANES" class="hide" value="NEUROSURGICAL ANESTHESIA">NEUROSURGICAL ANESTHESIA</option>
                                <option id="URO" class="hide" value="NEUROUROLOGY AND INCONTINENCE">NEUROUROLOGY AND INCONTINENCE</option>
                                <option id="CARDIO" class="hide" value="NON-INVASIVE CARDIAC IMAGING">NON-INVASIVE CARDIAC IMAGING</option>
                                <option id="CARDIO" class="hide" value="NUCLEAR CARDIOLOGY">NUCLEAR CARDIOLOGY</option>
                                <option id="ANES" class="hide" value="OBSTETRIC ANESTHESIA">OBSTETRIC ANESTHESIA</option>
                                <option id="OBGYNE" class="hide" value="OBSTETRIC GYNECOLOGIC INFECTIOUS DISEASE">OBSTETRIC GYNECOLOGIC INFECTIOUS DISEASE</option>
                                <option id="OBGYNE" class="hide" value="OBSTETRIC GYNECOLOGIC ULTRASOUND">OBSTETRIC GYNECOLOGIC ULTRASOUND</option>
                                <option id="PULMO" class="hide" value="OCCUPATIONAL LUNG DISEASE">OCCUPATIONAL LUNG DISEASE</option>
                                <option id="PARAMED" class="hide" value="OCCUPATIONAL THERAPY">OCCUPATIONAL THERAPY</option>
                                <option id="OPHTHA" class="hide" value="OCULAR IMMUNOLOGY AND UVEITIS">OCULAR IMMUNOLOGY AND UVEITIS</option>
                                <option id="OPHTHA" class="hide" value="OCULAR ONCOLOGY">OCULAR ONCOLOGY</option>
                                <option id="OPHTHA" class="hide" value="OCULAR PATHOLOGY AND ONCOLOGY">OCULAR PATHOLOGY AND ONCOLOGY</option>
                                <option id="ONCO" class="hide" value="ONCOLOGY">ONCOLOGY</option><option id="OPHTHA" class="hide" value="OPHTHALMIC GENETICS">OPHTHALMIC GENETICS</option>
                                <option id="OPHTHA" class="hide" value="OPHTHALMIC PLASTIC, RECONSTRUCTIVE AND ORBIT SURGERY">OPHTHALMIC PLASTIC, RECONSTRUCTIVE AND ORBIT SURGERY</option>
                                <option id="ANES" class="hide" value="OPHTHALMOLOGICAL ANESTHESIA">OPHTHALMOLOGICAL ANESTHESIA</option>
                                <option id="DENSUR" class="hide" value="ORAL AND MAXILLOFACIAL PATHOLOGY">ORAL AND MAXILLOFACIAL PATHOLOGY</option>
                                <option id="DENSUR" class="hide" value="ORAL AND MAXILLOFACIAL RADIOLOGY">ORAL AND MAXILLOFACIAL RADIOLOGY</option>
                                <option id="DENSUR" class="hide" value="ORAL AND MAXILLOFACIAL SURGERY">ORAL AND MAXILLOFACIAL SURGERY</option>
                                <option id="GENSUR" class="hide" value="ORGAN TRANSPLANTATION AND IMMUNOLOGY">ORGAN TRANSPLANTATION AND IMMUNOLOGY</option>
                                <option id="GENSUR" class="hide" value="ORGAN TRANSPLANTATION AND IMMUNOLOGY (KIDNEY)">ORGAN TRANSPLANTATION AND IMMUNOLOGY (KIDNEY)</option>
                                <option id="GENSUR" class="hide" value="ORGAN TRANSPLANTATION AND IMMUNOLOGY (LIVER)">ORGAN TRANSPLANTATION AND IMMUNOLOGY (LIVER)</option>
                                <option id="GENSUR" class="hide" value="ORGAN TRANSPLANTATION AND IMMUNOLOGY (PANCREAS)">ORGAN TRANSPLANTATION AND IMMUNOLOGY (PANCREAS)</option>
                                <option id="DENSUR" class="hide" value="ORTHODONTICS AND DENTOFACIAL ORTHOPEDICS">ORTHODONTICS AND DENTOFACIAL ORTHOPEDICS</option>
                                <option id="ORSUR" class="hide" value="ORTHOPEDIC NAVIGATIONAL SURGERY">ORTHOPEDIC NAVIGATIONAL SURGERY</option>
                                <option id="ORSUR" class="hide" value="ORTHOPEDIC REHABILITATION">ORTHOPEDIC REHABILITATION</option>
                                <option id="ORSUR" class="hide" value="ORTHOPEDIC TRAUMA">ORTHOPEDIC TRAUMA</option>
                                <option id="PAINMED" class="hide" value="PALLIATIVE MEDICINE">PALLIATIVE MEDICINE</option>
                                <option id="INDI" class="hide" value="PARASITOLOGY">PARASITOLOGY</option>
                                <option id="PEDIA" class="hide" value="PEDIATRIC ALLERGOLOGY AND IMMUNOLOGY">PEDIATRIC ALLERGOLOGY AND IMMUNOLOGY</option>
                                <option id="OBGYNE" class="hide" value="PEDIATRIC AND ADOLESCENT GYNECOLOGY">PEDIATRIC AND ADOLESCENT GYNECOLOGY</option><option id="ANES" class="hide" value="PEDIATRIC ANESTHESIA">PEDIATRIC ANESTHESIA</option>
                                <option id="PEDIA" class="hide" value="PEDIATRIC BRONCHOLOGY">PEDIATRIC BRONCHOLOGY</option>
                                <option id="PEDIA" class="hide" value="PEDIATRIC CARDIOLOGY - INTERVENTIONAL">PEDIATRIC CARDIOLOGY - INTERVENTIONAL</option>
                                <option id="PEDIA" class="hide" value="PEDIATRIC CARDIOLOGY - INVASIVE">PEDIATRIC CARDIOLOGY - INVASIVE</option>
                                <option id="GENSUR" class="hide" value="PEDIATRIC CARDIOVASCULAR SURGERY">PEDIATRIC CARDIOVASCULAR SURGERY</option><option id="PEDIA" class="hide" value="PEDIATRIC CRITICAL CARE">PEDIATRIC CRITICAL CARE</option>
                                <option id="DENSUR" class="hide" value="PEDIATRIC DENTISTRY">PEDIATRIC DENTISTRY</option>
                                <option id="DERMA" class="hide" value="PEDIATRIC DERMATOLOGY">PEDIATRIC DERMATOLOGY</option>
                                <option id="PEDIA" class="hide" value="PEDIATRIC EMERGENCY MEDICINE">PEDIATRIC EMERGENCY MEDICINE</option>
                                <option id="ERMED" class="hide" value="PEDIATRIC EMERGENCY MEDICINE">PEDIATRIC EMERGENCY MEDICINE</option>
                                <option id="PEDIA" class="hide" value="PEDIATRIC ENDOCRINOLOGY">PEDIATRIC ENDOCRINOLOGY</option>
                                <option id="PEDIA" class="hide" value="PEDIATRIC GASTROENTEROLOGY">PEDIATRIC GASTROENTEROLOGY</option>
                                <option id="HEMA" class="hide" value="PEDIATRIC HEMAONCOLOGY">PEDIATRIC HEMAONCOLOGY</option>
                                <option id="PEDIA" class="hide" value="PEDIATRIC HEMATOLOGY">PEDIATRIC HEMATOLOGY</option>
                                <option id="PEDIA" class="hide" value="PEDIATRIC INFECTIOUS DISEASE">PEDIATRIC INFECTIOUS DISEASE</option>
                                <option id="PEDIA" class="hide" value="PEDIATRIC NEPHROLOGY">PEDIATRIC NEPHROLOGY</option>
                                <option id="NUERO" class="hide" value="PEDIATRIC NEUROLOGY">PEDIATRIC NEUROLOGY</option>
                                <option id="PEDIA" class="hide" value="PEDIATRIC NEUROLOGY EPILEPSY">PEDIATRIC NEUROLOGY EPILEPSY</option>
                                <option id="NEUSUR" class="hide" value="PEDIATRIC NEUROSURGERY">PEDIATRIC NEUROSURGERY</option>
                                <option id="PEDIA" class="hide" value="PEDIATRIC ONCOLOGY">PEDIATRIC ONCOLOGY</option>
                                <option id="OPHTHA" class="hide" value="PEDIATRIC OPHTHALMOLOGY AND STRABISMUS">PEDIATRIC OPHTHALMOLOGY AND STRABISMUS</option>
                                <option id="ORSUR" class="hide" value="PEDIATRIC ORTHOPEDIC SURGERY">PEDIATRIC ORTHOPEDIC SURGERY</option>
                                <option id="OTORHI" class="hide" value="PEDIATRIC OTORHINOLARYNGOLOGY">PEDIATRIC OTORHINOLARYNGOLOGY</option>
                                <option id="PAINMED" class="hide" value="PEDIATRIC PAIN MANAGEMENT">PEDIATRIC PAIN MANAGEMENT</option>
                                <option id="PULMO" class="hide" value="PEDIATRIC PULMONARY">PEDIATRIC PULMONARY</option>
                                <option id="PEDIA" class="hide" value="PEDIATRIC PULMONOLOGY">PEDIATRIC PULMONOLOGY</option>
                                <option id="RADIO" class="hide" value="PEDIATRIC RADIOLOGY">PEDIATRIC RADIOLOGY</option>
                                <option id="PEDIA" class="hide" value="PEDIATRIC RHEUMATOLOGY">PEDIATRIC RHEUMATOLOGY</option>
                                <option id="PEDIA" class="hide" value="PEDIATRIC SLEEP MEDICINE">PEDIATRIC SLEEP MEDICINE</option>
                                <option id="GENSUR" class="hide" value="PEDIATRIC SURGERY">PEDIATRIC SURGERY</option>
                                <option id="PEDIA" class="hide" value="PEDIATRIC TOXICOLOGY">PEDIATRIC TOXICOLOGY</option>
                                <option id="URO" class="hide" value="PEDIATRIC UROLOGY">PEDIATRIC UROLOGY</option>
                                <option id="PARAMED" class="hide" value="PERFUSIONIST">PERFUSIONIST</option>
                                <option id="CARDIO" class="hide" value="PERIPHERAL AND VASCULAR INTERVENTION">PERIPHERAL AND VASCULAR INTERVENTION</option>
                                <option id="CARDIO" class="hide" value="PERIPHERAL AND VASCULAR MEDICINE">PERIPHERAL AND VASCULAR MEDICINE</option>
                                <option id="NEUSUR" class="hide" value="PERIPHERAL NERVE NEUROSURGERY">PERIPHERAL NERVE NEUROSURGERY</option>
                                <option id="CLIPAT" class="hide" value="PHLEBOTOMY">PHLEBOTOMY</option>
                                <option id="PARAMED" class="hide" value="PHYSICAL THERAPY">PHYSICAL THERAPY</option>
                                <option id="GENSUR" class="hide" value="PLASTIC AND RECONSTRUCTIVE SURGERY">PLASTIC AND RECONSTRUCTIVE SURGERY</option>
                                <option id="PEDIA" class="hide" value="PPEDIATRIC CARDIOLOGY">PPEDIATRIC CARDIOLOGY</option>
                                <option id="DENSUR" class="hide" value="PROSTHODONTICS">PROSTHODONTICS</option>
                                <option id="PULMO" class="hide" value="PULMONARY CRITICAL CARE">PULMONARY CRITICAL CARE</option>
                                <option id="PULMO" class="hide" value="PULMONARY REHABILITIATION">PULMONARY REHABILITIATION</option>
                                <option id="PULMO" class="hide" value="PULMONARY VASCULAR DISEASE">PULMONARY VASCULAR DISEASE</option>
                                <option id="RADONCO" class="hide" value="RADIATION ONCOLOGY">RADIATION ONCOLOGY</option>
                                <option id="PARAMED" class="hide" value="READING SPECIALIST">READING SPECIALIST</option>
                                <option id="OPHTHA" class="hide" value="REFRACTIVE SURGERY">REFRACTIVE SURGERY</option>
                                <option id="ANAPAT" class="hide" value="RENAL PATHOLOGY">RENAL PATHOLOGY</option>
                                <option id="URO" class="hide" value="RENAL TRANSPLANT SURGERY">RENAL TRANSPLANT SURGERY</option>
                                <option id="OBGYNE" class="hide" value="REPRODUCTIVE ENDOCRINOLOGY AND INFERTILITY">REPRODUCTIVE ENDOCRINOLOGY AND INFERTILITY</option>
                                <option id="OPHTHA" class="hide" value="RETINA AND VITREOUS SURGERY">RETINA AND VITREOUS SURGERY</option>
                                <option id="OTORHI" class="hide" value="RHINOPHARYNGOLOGY (NOSE AND PARANASAL SINUSES)">RHINOPHARYNGOLOGY (NOSE AND PARANASAL SINUSES)</option>
                                <option id="OTORHI" class="hide" value="ROBOTIC AND MINIMALLY INVASIVE ENTH">ROBOTIC AND MINIMALLY INVASIVE ENTH</option>
                                <option id="OBGYNE" class="hide" value="ROBOTIC AND MINIMALLY INVASIVE OBGYNE">ROBOTIC AND MINIMALLY INVASIVE OBGYNE</option>
                                <option id="GENSUR" class="hide" value="ROBOTIC AND MINIMALLY INVASIVE SURGERY">ROBOTIC AND MINIMALLY INVASIVE SURGERY</option>
                                <option id="URO" class="hide" value="ROBOTIC AND MINIMALLY INVASIVE UROLOGY">ROBOTIC AND MINIMALLY INVASIVE UROLOGY</option>
                                <option id="PARAMED" class="hide" value="SCHOOL PSYCHOLOGY">SCHOOL PSYCHOLOGY</option>
                                <option id="CLIPAT" class="hide" value="SEROLOGY">SEROLOGY</option>
                                <option id="DERMA" class="hide" value="SKIN AGING">SKIN AGING</option>
                                <option id="NEUSUR" class="hide" value="SKULL BASE SURGERY">SKULL BASE SURGERY</option>
                                <option id="NUERO" class="hide" value="SLEEP DISORDERS">SLEEP DISORDERS</option>
                                <option id="PULMO" class="hide" value="SLEEP MEDICINE">SLEEP MEDICINE</option>
                                <option id="OTORHI" class="hide" value="SLEEP MEDICINE AND SURGERY">SLEEP MEDICINE AND SURGERY</option>
                                <option id="PARAMED" class="hide" value="SPECIAL EDUCATION">SPECIAL EDUCATION</option>
                                <option id="PARAMED" class="hide" value="SPEECH AND LANGUAGE PATHOLOGY">SPEECH AND LANGUAGE PATHOLOGY</option>
                                <option id="NEUSUR" class="hide" value="SPINE SURGERY">SPINE SURGERY</option>
                                <option id="ORSUR" class="hide" value="SPINE SURGERY">SPINE SURGERY</option
                                ><option id="ORSUR" class="hide" value="SPORTS MEDICINE">SPORTS MEDICINE</option>
                                <option id="NEUSUR" class="hide" value="STEREOTACTIC RADIOSURGERY">STEREOTACTIC RADIOSURGERY</option>
                                <option id="NUERO" class="hide" value="STROKE">STROKE</option>
                                <option id="GENSUR" class="hide" value="SURGICAL CRITICAL CARE">SURGICAL CRITICAL CARE</option>
                                <option id="NEUSUR" class="hide" value="SURGICAL NEUROONCOLOGY">SURGICAL NEUROONCOLOGY</option>
                                <option id="GENSUR" class="hide" value="SURGICAL ONCOLOGY">SURGICAL ONCOLOGY</option>
                                <option id="ANAPAT" class="hide" value="SURGICAL PATHOLOGY">SURGICAL PATHOLOGY</option>
                                <option id="GENSUR" class="hide" value="THORACIC SURGERY">THORACIC SURGERY</option>
                                <option id="ANES" class="hide" value="THORACIC-CARDIOVASCULAR ANESTHESIA">THORACIC-CARDIOVASCULAR ANESTHESIA</option>
                                <option id="DENSUR" class="hide" value="TMJ SPECIALTY">TMJ SPECIALTY</option>
                                <option id="ANES" class="hide" value="TRANSPLANT ANESTHESIA">TRANSPLANT ANESTHESIA</option>
                                <option id="GASTRO" class="hide" value="TRANSPLANT HEPATOLOGY">TRANSPLANT HEPATOLOGY</option>
                                <option id="GENSUR" class="hide" value="TRAUMA SURGERY">TRAUMA SURGERY</option>
                                <option id="OBGYNE" class="hide" value="TROPHOBLASTIC DISEASE">TROPHOBLASTIC DISEASE</option>
                                <option id="RADIO" class="hide" value="ULTRASOUND">ULTRASOUND</option>
                                <option id="OBGYNE" class="hide" value="UROGYNECOLOGY">UROGYNECOLOGY</option>
                                <option id="URO" class="hide" value="UROLOGIC ONCOLOGY">UROLOGIC ONCOLOGY</option>
                                <option id="ANAPAT" class="hide" value="UROLOGIC PATHOLOGY (MALE GENITAL TRACT)">UROLOGIC PATHOLOGY (MALE GENITAL TRACT)</option><option id="GENSUR" class="hide" value="VASCULAR SURGERY">VASCULAR SURGERY</option></select>
                            </div>



                        </div>


                    <!-- sub specializtion -->


                  </div>
                  <div class="col-sm-9 border border-2 p-3">
                      <div class="mb-5">
                        <h3 class="fw-bold"> Results:</h3>
                      </div>
                      <div class="my-5">
                        <h5 class="fw-bold">Juan Luna</h5>
                        <p class="cen-p-line-height">Email : juanluna@gmail.com</p>
                        <p class="cen-p-line-height">Specialty:  Nephrology</p>
                        <p class="cen-p-line-height">Sub Specialty:</p>
                        <p class="cen-p-line-height">Institution: UP</p>
                      </div>
                      <div class="my-5">
                        <h5 class="fw-bold">Juan Luna</h5>
                        <p class="cen-p-line-height">Email : juanluna@gmail.com</p>
                        <p class="cen-p-line-height">Specialty:  Nephrology</p>
                        <p class="cen-p-line-height">Sub Specialty:</p>
                        <p class="cen-p-line-height">Institution: UP</p>
                      </div>
                  </div>

                </div>
                   
            </div>  




        </div>
      </div>
    </div>
</main>

<?php 
include_once("footer.php");
?>