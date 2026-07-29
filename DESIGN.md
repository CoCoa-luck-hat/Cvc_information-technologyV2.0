---
name: แผนกวิชาเทคโนโลยีสารสนเทศ
description: แหล่งบ่มเพาะนักเทคโนโลยีรุ่นใหม่ที่ทันสมัยและพร้อมทำงานจริง
colors:
  primary: "#b71616"
  primary-light: "#e10000"
  primary-dark: "#af0000"
  neutral-bg: "#f8f9fa"
  neutral-text: "#212529"
  white: "#ffffff"
typography:
  display:
    fontFamily: "Prompt, sans-serif"
    fontSize: "clamp(2rem, 5vw, 3.5rem)"
    fontWeight: 700
    lineHeight: 1.2
  headline:
    fontFamily: "Prompt, sans-serif"
    fontSize: "1.75rem"
    fontWeight: 600
    lineHeight: 1.3
  title:
    fontFamily: "Prompt, sans-serif"
    fontSize: "1.25rem"
    fontWeight: 500
    lineHeight: 1.4
  body:
    fontFamily: "Prompt, sans-serif"
    fontSize: "1rem"
    fontWeight: 400
    lineHeight: 1.6
  label:
    fontFamily: "Prompt, sans-serif"
    fontSize: "0.875rem"
    fontWeight: 400
    lineHeight: 1.5
rounded:
  sm: "4px"
  md: "8px"
  lg: "10px"
spacing:
  sm: "8px"
  md: "16px"
  lg: "24px"
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.white}"
    rounded: "{rounded.sm}"
    padding: "8px 16px"
  button-primary-hover:
    backgroundColor: "{colors.neutral-text}"
    textColor: "{colors.white}"
---

# Design System: แผนกวิชาเทคโนโลยีสารสนเทศ

## 1. Overview

**Creative North Star: "The Interactive Tech Studio"**

ระบบการออกแบบ "The Interactive Tech Studio" มุ่งเน้นภาพลักษณ์ที่ล้ำสมัย มีมิติสายตา และสะท้อนความเป็นนักพัฒนาเทคโนโลยีรุ่นใหม่ที่เต็มไปด้วยพลังสร้างสรรค์ โดยหลีกเลี่ยงรูปแบบดั้งเดิมที่ดูเป็นทางการจนเกินไป หรือ "ดีไซน์แบบเว็บราชการยุคเก่า" (เช่น เลย์เอาต์ตารางที่เบียดทึบ สีจืดชืด และการอัดตัวหนังสือเป็นพรืด)

เรานำเสนอข้อมูลผ่านโครงสร้างที่เป็นระเบียบ (Grid & Flexbox) ควบคู่ไปกับการใช้ลูกเล่นการเคลื่อนไหวที่น่าตื่นเต้นแต่เป็นธรรมชาติ (เช่น 3D Scroll, Timeline Control, และ Seamless Transitions) เพื่อเพิ่มความน่าสนใจให้กับหลักสูตรและผลงานของแผนก

**Key Characteristics:**
- **High-Tech Aesthetic**: สะอาด ทันสมัย และเป็นมืออาชีพด้วยคู่สี แดง-ขาว-เทาเข้ม
- **Prompt Typography**: อักษรไร้หัวสไตล์โมเดิร์นที่อ่านง่าย สบายตา ทั้งภาษาไทยและอังกฤษ
- **Interactive Depth**: ความมีมิติขององค์ประกอบจากการใช้ช่องไฟ (Spacings) และลูกเล่น Scrolling Effects

---

## 2. Colors

สีสันของระบบออกแบบนี้จะใช้สีแดง (Red) เป็นหลักเพื่อแสดงพลัง ความตื่นเต้น และความโดดเด่น ผสานกับสีขาวและสีเทาเข้มเพื่อคุมโทนให้ดูเป็นมืออาชีพ

### Primary
- **Tech Crimson Red** (#b71616): สีหลักประจำแผนกวิชา ใช้สำหรับองค์ประกอบสำคัญ เช่น หัวข้อหลัก, ไอคอนเด่น, หรือปุ่ม Action หลัก
- **Bright Active Red** (#e10000): สีแดงสว่าง ใช้เมื่อเกิดการโต้ตอบ (Hover States), ปุ่มย้อนกลับสู่ด้านบน (Back-to-top), และการแจ้งเตือนสำคัญ
- **Deep Maroon Red** (#af0000 / #b50000): สีแดงเข้ม ใช้สำหรับพื้นหลังของหัวข้อเด่น (Breadcrumbs) และพื้นที่ส่วนท้ายของเว็บ (Footer)

### Neutral
- **Charcoal Text** (#212529): สีเทาเข้ม/ดำ ใช้สำหรับตัวอักษรเนื้อหาหลัก (Body Copy) และปุ่มเมื่อเกิดการ Hover
- **Light Slate Gray** (#f8f9fa): สีเทาอ่อน ใช้เป็นสีพื้นหลังหลัก (Background) เพื่อช่วยให้หน้าเว็บดูสะอาดและโปร่งสบาย
- **Pure White** (#ffffff): สีขาว ใช้สำหรับพื้นหลังของกล่องเนื้อหา (Cards/Containers) เพื่อสร้างมิติการแยกส่วนที่ชัดเจน

### Named Rules
**The selective Red Accent Rule.** สีแดงจะถูกใช้อย่างระมัดระวังในอัตราส่วนไม่เกิน 15% ของพื้นที่หน้าจอทั้งหมด การจำกัดปริมาณสีแดงจะช่วยให้องค์ประกอบที่เป็นสีแดงดูสำคัญ โดดเด่น และไม่ทำลายสายตาของผู้เข้าชม

---

## 3. Typography

ระบบฟอนต์จะใช้ฟอนต์ **"Prompt"** เป็นหลักสำหรับองค์ประกอบทั้งหมดในเว็บไซต์ เพื่อเปลี่ยนภาพลักษณ์ให้ดูทันสมัยและเป็นสากลมากขึ้น

**Display Font:** Prompt (sans-serif)
**Body Font:** Prompt (sans-serif)

**Character:** ดูสะอาด เรียบร้อย มีความเป็นเทคโนโลยีสมัยใหม่ และอ่านง่ายในทุกขนาดหน้าจอ

### Hierarchy
- **Display** (Bold (700), clamp(2rem, 5vw, 3.5rem), 1.2): ใช้สำหรับหัวข้อหลักบนแบนเนอร์แรก (Hero Section) เพื่อสร้างจุดดึงสายตาแรก
- **Headline** (SemiBold (600), 1.75rem, 1.3): ใช้สำหรับหัวข้อหลักของแต่ละหมวดหมู่เนื้อหา (Sections)
- **Title** (Medium (500), 1.25rem, 1.4): ใช้สำหรับหัวข้อในกล่องข้อความย่อย (Card Headings)
- **Body** (Regular (400), 1rem, 1.6): ใช้สำหรับเนื้อหารายละเอียดทั่วไป กำหนดความกว้างของบล็อกตัวหนังสือไม่เกิน 65–75ch เพื่อให้อ่านง่ายที่สุด
- **Label** (Regular (400), 0.875rem, 1.5): ใช้สำหรับคำอธิบายย่อย วันที่ หรือป้ายกำกับต่างๆ

---

## 4. Elevation

ระบบนี้เน้นมิติความลึกที่แบนเรียบ สะอาดตา (Flat-by-default) แต่ใช้ลูกเล่น Layering และ Shadow เมื่อผู้ใช้งานเกิดการปฏิสัมพันธ์กับหน้าเว็บ

### Shadow Vocabulary
- **Interactive Glow** (`box-shadow: 0 4px 24px rgba(0,0,0,0.08)`): ใช้เมื่อผู้ใช้งานเลื่อนเมาส์ไปชี้ที่กล่องผลงานหรือกิจกรรม (Cards Hover) เพื่อบอกสถานะการคลิก
- **Ambient Shadow** (`box-shadow: 0 2px 10px rgba(0,0,0,0.05)`): ใช้กับกล่องเนื้อหาทั่วไปที่ต้องการยกลอยจากพื้นหลังสีเทาอ่อนเล็กน้อย

---

## 5. Components

### Buttons
- **Shape:** ขอบเหลี่ยมโค้งมนเล็กน้อย (4px radius)
- **Primary:** พื้นหลังสีแดง Crimson (#b71616), ตัวหนังสือสีขาว (#ffffff)
- **Hover / Focus:** สีพื้นหลังจะเปลี่ยนเป็นสี Charcoal (#212529) แบบลื่นไหลด้วย CSS Transition 0.5s

### Cards / Containers
- **Corner Style:** มุมมนขนาดใหญ่ปานกลาง (10px radius)
- **Background:** สีขาว (#ffffff) ตัดกับพื้นหลังของเว็บไซต์ที่เป็นสีเทาอ่อน (#f8f9fa)
- **Hover Strategy:** เมื่อชี้เมาส์ (Hover) กล่องการ์ดจะได้รับแสงเงาเบาๆ หรือมีเอฟเฟกต์การเลื่อนขยับทิศทางเล็กน้อย (เช่น เอฟเฟกต์ Tilt)

### Navigation
- **Style:** แถบเมนูด้านบนสีขาวสะอาดตา ไอคอนคมชัด
- **Hover/Active:** ลิงก์เมนูที่ถูกเลือกหรือชี้จะเปลี่ยนตัวอักษรเป็นสีแดงประจำแผนกวิชา (#b71616)

---

## 6. Do's and Don'ts

### Do:
- **Do** ใช้ฟอนต์ Prompt เสมอในการแสดงผลข้อความเพื่อรักษาเอกลักษณ์
- **Do** เว้นระยะห่าง (Padding/Margin) ระหว่างหัวข้อและเนื้อหาให้กว้างและโปร่งโล่งเพื่อให้หน้าเว็บดูสบายตา
- **Do** คุมสัดส่วนของสีแดงหลักไม่ให้สว่างแสบตาหรือมีปริมาณเยอะเกินไปจนอ่านยาก

### Don't:
- **Don't** ใช้ดีไซน์เลย์เอาต์ที่เป็นตารางขอบหนาๆ สีเทาเข้มแบบเว็บยุคเก่าเด็ดขาด
- **Don't** พิมพ์ข้อความติดกันยาวเป็นพรืดโดยไม่มีหัวข้อย่อย รูปภาพประกอบ หรือปุ่ม Action แทรกระหว่างทาง
- **Don't** ใช้ลูกเล่นการเคลื่อนไหวที่กะพริบหรือเคลื่อนที่เร็วจนรบกวนการอ่านข้อมูลทั่วไปของผู้ใช้งาน
