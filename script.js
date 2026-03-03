const rows = document.querySelectorAll(".exam-row");
const hiddenBlock = document.getElementById("hidden");
const hiddenBlock2 = document.getElementById("hidden2");
const hiddenBlock3 = document.getElementById("hidden3");
const hiddenBlock4 = document.getElementById("hidden4");
const openMeet = document.getElementById("openmeet");
const back_ = document.getElementById("back_2");
const back = document.getElementById("back");
const comeback = document.getElementById("comeback");
const saveBtn = document.getElementById("save-btn");
const open = document.querySelectorAll(".open");
const tank = document.querySelectorAll(".tank");
const openExam = document.getElementById('openexam');
const records = document.querySelectorAll(".record");
const cmbk = document.getElementById('cmbk2');
const form = document.getElementById('from');
const next = document.getElementById('next');
const labels = document.querySelectorAll(".Label");
const checkboxes = document.querySelectorAll(".cheackbox");
// Attendance boxes - click qilish uchun
const attendanceBoxes = document.querySelectorAll('.attendance-box');
// Grade boxes - baho qo'yish uchun
const gradeBoxes = document.querySelectorAll('.grade-box');
// Student avatars - ogohlantirish qo'yish uchun
const studentAvatars = document.querySelectorAll('.student-avatar');
const faceId = document.getElementById('face-id');
const searchF = document.getElementById('searchF');
const faceId2 = document.getElementById('face-id2')
const faceTast = document.querySelectorAll('.face-idTask')
const FBack = document.getElementById('Fback_2');
const sett = document.getElementById('setB')
const bb = document.getElementById('bb')
const setE = document.getElementById('searchE')
const emp = document.getElementById('Emp');
const empB = document.getElementById('EmpBack');
const bE = document.getElementById('empB');
const bob = document.getElementById('bob')
const faceId3 = document.getElementById('faceId3');
const faceIdL = document.getElementsByClassName('face-idL')
// faceIdL[0].addEventListener('click', () => {
//     faceId3.classList.remove('hidden')
// });
function deleteNotification(index) {
    // Bu yerda delete_notification.php ga so'rov yuboriladi
    fetch('delete_notification.php', {
        method: 'POST',
        body: JSON.stringify({ index: index })
    })
}
if(bob){
    bob.addEventListener('click', () => {
        if(emp) emp.classList.add('hidden');
    });
}
if(empB){
    empB.addEventListener('click', () => {
        if(emp) emp.classList.add('hidden');
    });
}
if(setE){
    setE.addEventListener('click', () => {
        if(emp) emp.classList.remove('hidden');
    });
}
if(sett){
    sett.addEventListener('click', () => {
        if(faceId) faceId.classList.add('hidden');
    });
}
if(FBack && faceId2){
    FBack.addEventListener('click', () => {
        faceId2.classList.add('hidden');
    });
}
faceTast.forEach(btn => {
    btn.addEventListener('click', () => {
        faceId2.classList.remove('hidden')
    });
});
if(bb && faceId2){
    bb.addEventListener('click', () => {
        faceId2.classList.add('hidden');
    });
}

// ==================== TALABA RASMI - OGOHLANTIRISH TANLASH ====================
studentAvatars.forEach(avatar => {
    avatar.addEventListener('click', function(e) {
        e.stopPropagation();
        
        // Avvalgi ochiq menyularni yopish
        document.querySelectorAll('.warning-menu').forEach(menu => menu.remove());
        
        // Qaysi qatorda ekanligini topish
        const studentRow = this.closest('.grid');
        const studentInfo = studentRow.querySelector('.flex.items-center.gap-2');
        
        // Menyu yaratish
        const menu = document.createElement('div');
        menu.className = 'warning-menu';
        menu.style.cssText = `
            position: absolute;
            background: white;
            border: 2px solid #E5E7EB;
            border-radius: 12px;
            padding: 8px;
            display: flex;
            gap: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            z-index: 1000;
        `;
        
        // Menyu tugmalari
        const options = [
            { img: './image/Vector.png', alt: 'Qizil ogohlantirish', bg: '#EF4444' },
            { img: './image/Vector.svg', alt: 'Sariq ogohlantirish', bg: '#F59E0B' },
            { text: '✕', alt: 'O\'chirish', bg: '#6B7280' }
        ];
        
        options.forEach(option => {
            const btn = document.createElement('button');
            btn.style.cssText = `
                width: 48px;
                height: 48px;
                border-radius: 8px;
                border: 2px solid #E5E7EB;
                background: white;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.2s;
            `;
            
            if (option.img) {
                const img = document.createElement('img');
                img.src = option.img;
                img.alt = option.alt;
                img.style.cssText = 'width: 28px; height: 28px;';
                btn.appendChild(img);
            } else {
                btn.textContent = option.text;
                btn.style.fontSize = '24px';
                btn.style.fontWeight = 'bold';
                btn.style.color = '#6B7280';
            }
            
            // Hover effect
            btn.addEventListener('mouseenter', () => {
                btn.style.borderColor = option.bg;
                btn.style.transform = 'scale(1.1)';
            });
            
            btn.addEventListener('mouseleave', () => {
                btn.style.borderColor = '#E5E7EB';
                btn.style.transform = 'scale(1)';
            });
            
            // Click event
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                
                // Avvalgi ogohlantirishni o'chirish
                const oldWarning = studentInfo.querySelector('img[alt*="ogohlantirish"], img[alt="Warning icon"]');
                if (oldWarning && oldWarning !== avatar) {
                    oldWarning.remove();
                }
                
                // Yangi ogohlantirish qo'shish (agar o'chirish bo'lmasa)
                if (option.img) {
                    const newWarning = document.createElement('img');
                    newWarning.src = option.img;
                    newWarning.alt = option.alt;
                    newWarning.style.cssText = 'width: 28px; height: 28px;';
                    
                    // Talaba rasmidan oldin qo'shish
                    studentInfo.insertBefore(newWarning, avatar);
                }
                
                // Menyuni yopish
                menu.remove();
            });
            
            menu.appendChild(btn);
        });
        
        // Menyuni qo'shish
        document.body.appendChild(menu);
        
        // Menyu pozitsiyasini hisoblash
        const rect = this.getBoundingClientRect();
        menu.style.left = rect.left + 'px';
        menu.style.top = (rect.bottom + 5) + 'px';
    });
});

const faceIdBack = document.getElementById('face-idBack');

if(faceIdBack){
    faceIdBack.addEventListener('click', () => {
        faceId.classList.add('hidden');
    });
}

// ==================== GRADE ====================
gradeBoxes.forEach(box => {
    box.addEventListener('click', function(e) {
        e.stopPropagation();
        
        // Avvalgi menyularni yopish
        document.querySelectorAll('.grade-menu').forEach(menu => menu.remove());
        
        // Menyu yaratish
        const menu = document.createElement('div');
        menu.className = 'grade-menu';
        menu.style.cssText = `
            position: absolute;
            background: white;
            border: 2px solid #E5E7EB;
            border-radius: 12px;
            padding: 8px;
            display: flex;
            gap: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            z-index: 1000;
        `;
        
        // Baho tugmalari
        const grades = [
            { value: '5', bg: '#10B981', color: '#fff' },
            { value: '4', bg: '#3B82F6', color: '#fff' },
            { value: '3', bg: '#F59E0B', color: '#fff' },
            { value: '2', bg: '#EF4444', color: '#fff' },
            { text: '✕', value: '', bg: '#6B7280', color: '#fff' }
        ];
        
        grades.forEach(grade => {
            const btn = document.createElement('button');
            btn.style.cssText = `
                width: 40px;
                height: 40px;
                border-radius: 8px;
                border: 2px solid ${grade.bg};
                background: ${grade.bg};
                color: ${grade.color};
                cursor: pointer;
                font-weight: bold;
                font-size: 18px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.2s;
            `;
            
            btn.textContent = grade.text || grade.value;
            
            // Hover effect
            btn.addEventListener('mouseenter', () => {
                btn.style.transform = 'scale(1.15)';
                btn.style.boxShadow = '0 4px 8px rgba(0,0,0,0.2)';
            });
            
            btn.addEventListener('mouseleave', () => {
                btn.style.transform = 'scale(1)';
                btn.style.boxShadow = 'none';
            });
            
            // Click event
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                
                // Avvalgi bahoni o'chirish
                const oldGrade = box.querySelector('.grade-text');
                if (oldGrade) oldGrade.remove();
                
                // Yangi baho qo'shish (agar o'chirish bo'lmasa)
                if (grade.value) {
                    const newGrade = document.createElement('h1');
                    newGrade.textContent = grade.value;
                    newGrade.className = 'grade-text font-semibold';
                    box.appendChild(newGrade);
                }
                
                // Menyuni yopish
                menu.remove();
            });
            
            menu.appendChild(btn);
        });
        
        // Menyuni qo'shish
        document.body.appendChild(menu);
        
        // Menyu pozitsiyasini hisoblash
        const rect = box.getBoundingClientRect();
        menu.style.left = rect.left + 'px';
        menu.style.top = (rect.bottom + 5) + 'px';
    });
});

if (searchF && faceId) {
    searchF.addEventListener('click', () => {
        faceId.classList.remove('hidden');
    });
}

// ==================== DAVOMAT ====================
attendanceBoxes.forEach(box => {
    box.addEventListener('click', function(e) {
        e.stopPropagation();
        
        // Avvalgi ochiq menyularni yopish
        document.querySelectorAll('.attendance-menu').forEach(menu => menu.remove());
        
        // Menyu yaratish
        const menu = document.createElement('div');
        menu.className = 'attendance-menu';
        menu.style.cssText = `
            position: absolute;
            background: white;
            border: 2px solid #E5E7EB;
            border-radius: 12px;
            padding: 8px;
            display: flex;
            gap: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            z-index: 1000;
        `;
        
        // Menyu tugmalari
        const options = [
            { img: './image/Vector (2).png', alt: 'Keldi', bg: '#10B981' },
            { img: './image/Vector (1).png', alt: 'Kech', bg: '#F59E0B' },
            { img: './image/Vector (1).svg', alt: 'Kelmadi', bg: '#EF4444' },
            { text: '✕', alt: 'O\'chirish', bg: '#6B7280' }
        ];
        
        options.forEach(option => {
            const btn = document.createElement('button');
            btn.style.cssText = `
                width: 40px;
                height: 40px;
                border-radius: 8px;
                border: 2px solid #E5E7EB;
                background: white;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.2s;
            `;
            
            if (option.img) {
                const img = document.createElement('img');
                img.src = option.img;
                img.alt = option.alt;
                img.style.cssText = 'width: 24px; height: 24px;';
                btn.appendChild(img);
            } else {
                btn.textContent = option.text;
                btn.style.fontSize = '20px';
                btn.style.fontWeight = 'bold';
                btn.style.color = '#6B7280';
            }
            
            // Hover effect
            btn.addEventListener('mouseenter', () => {
                btn.style.borderColor = option.bg;
                btn.style.transform = 'scale(1.1)';
            });
            
            btn.addEventListener('mouseleave', () => {
                btn.style.borderColor = '#E5E7EB';
                btn.style.transform = 'scale(1)';
            });
            
            // Click event
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                
                // Avvalgi rasmni o'chirish
                const oldImg = box.querySelector('.attendance-icon');
                if (oldImg) oldImg.remove();
                
                // Yangi rasm qo'shish (agar o'chirish bo'lmasa)
                if (option.img) {
                    const newImg = document.createElement('img');
                    newImg.src = option.img;
                    newImg.alt = option.alt;
                    newImg.className = 'attendance-icon';
                    newImg.style.cssText = 'width: 24px; height: 24px;';
                    box.appendChild(newImg);
                }
                
                // Menyuni yopish
                menu.remove();
            });
            
            menu.appendChild(btn);
        });
        
        // Menyuni qo'shish
        document.body.appendChild(menu);
        
        // Menyu pozitsiyasini hisoblash
        const rect = box.getBoundingClientRect();
        menu.style.left = rect.left + 'px';
        menu.style.top = (rect.bottom + 5) + 'px';
    });
});

// Tashqariga bosganda barcha menyularni yopish
document.addEventListener('click', () => {
    document.querySelectorAll('.attendance-menu, .grade-menu, .warning-menu').forEach(menu => menu.remove());
});

// Back button
if(back) {
  back.addEventListener('click', () => {
    if(hiddenBlock) hiddenBlock.classList.add('hidden');
  });
}

// Checkboxes
checkboxes.forEach(item => {
  item.addEventListener("change", function() {
    const parentLabel = this.closest(".Label");
    
    if(parentLabel) {
      if (this.checked) {
        parentLabel.classList.remove("bg-white");
        parentLabel.classList.add("bg-[#0B7BE31A]");
      } else {
        parentLabel.classList.remove("bg-[#0B7BE31A]");
        parentLabel.classList.add("bg-white");
      }
    }
  });
});

// Rows click
rows.forEach(row => {
  row.addEventListener("click", () => {
    if(hiddenBlock) hiddenBlock.classList.remove("hidden");
  });
});

// Open Exam
if(openExam) {
  openExam.addEventListener('click', () => {
    if(hiddenBlock3) hiddenBlock3.classList.remove('hidden');
  });
}

// Open Meet
if(openMeet) {
  openMeet.addEventListener('click', () => {
    if(hiddenBlock4) hiddenBlock4.classList.remove('hidden');
  });
}

// Back button 2
if(back_) {
  back_.addEventListener('click', () => {
    if(hiddenBlock3) hiddenBlock3.classList.add('hidden');
  });
}

// Comeback 2 (cmbk)
if(cmbk) {
  cmbk.addEventListener("click", () => {
    if(hiddenBlock4) hiddenBlock4.classList.add("hidden");
  });
}

// Save button
if(saveBtn) {
  saveBtn.addEventListener("click", () => {
    saveBtn.classList.add("hidden");
  });
}

// Open buttons
open.forEach(btn => {
  btn.addEventListener("click", () => {
    if(hiddenBlock2) hiddenBlock2.classList.remove("hidden");
  });
});

// Comeback button
if(comeback) {
  comeback.addEventListener("click", () => {
    if(hiddenBlock2) hiddenBlock2.classList.add("hidden");
  });
}

// ==================== SHIKOYAT MODAL - TELEGRAM BOT INTEGRATSIYASI ====================
const reportBtn = document.getElementById('reportBtn');
const reportModal = document.getElementById('reportModal');
const closeReportModal = document.getElementById('closeReportModal');
const cancelReport = document.getElementById('cancelReport');
const sendReport = document.getElementById('sendReport');
const reportMessage = document.getElementById('reportMessage');

// Modalni ochish
if(reportBtn) {
    reportBtn.addEventListener('click', () => {
        reportModal.classList.remove('hidden');
        reportModal.classList.add('flex');
    });
}

// Modalni yopish (X tugmasi)
if(closeReportModal) {
    closeReportModal.addEventListener('click', () => {
        reportModal.classList.add('hidden');
        reportModal.classList.remove('flex');
        reportMessage.value = '';
    });
}

// Modalni yopish (Ortga tugmasi)
if(cancelReport) {
    cancelReport.addEventListener('click', () => {
        reportModal.classList.add('hidden');
        reportModal.classList.remove('flex');
        reportMessage.value = '';
    });
}

// Tashqariga bosganda yopish
if(reportModal) {
    reportModal.addEventListener('click', (e) => {
        if (e.target === reportModal) {
            reportModal.classList.add('hidden');
            reportModal.classList.remove('flex');
            reportMessage.value = '';
        }
    });
}

// ==================== TELEGRAM BOTGA YUBORISH ====================
if(sendReport) {
    sendReport.addEventListener('click', async () => {
        const message = reportMessage.value.trim();
        
        if(message === '') {
            alert('Iltimos, muammoni yozing!');
            return;
        }
        
        // Tugmani bloklash va yuklash ko'rsatish
        sendReport.disabled = true;
        const originalText = sendReport.innerHTML;
        sendReport.innerHTML = '<i class="fa-solid fa-spinner fa-spin mr-2"></i>Yuborilmoqda...';
        
        try {
            // Backend ga yuborish
            const response = await fetch('send_report.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ 
                    message: message,
                    timestamp: new Date().toISOString(),
                    page: window.location.href,
                    userAgent: navigator.userAgent
                })
            });
            
            const data = await response.json();
            
            if(data.success) {
                // Muvaffaqiyatli yuborildi
                alert('✅ Shikoyat muvaffaqiyatli yuborildi!');
                
                // Modalni yopish va tozalash
                reportModal.classList.add('hidden');
                reportModal.classList.remove('flex');
                reportMessage.value = '';
            } else {
                // Xatolik
                alert('❌ Xatolik: ' + (data.error || 'Noma\'lum xatolik yuz berdi'));
            }
        } catch (error) {
            // Network xatolik
            console.error('Error:', error);
            alert('❌ Serverga ulanishda xatolik! Iltimos, qaytadan urinib ko\'ring.');
        } finally {
            // Tugmani qayta faollashtirish
            sendReport.disabled = false;
            sendReport.innerHTML = originalText;
        }
    });
}
