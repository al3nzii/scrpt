if gg.PACKAGE ~= "gg.general" then
gg.alert([[📛ستخدم قيم قاردن جنرال فقط 📛]])
os.exit()
end


user = io.open("/storage/emulated/0/Telegram/armv8.data")
key = io.open("/storage/emulated/0/Telegram/armv7.data")
if user == nil or key == nil then
  gg.alert("فعل الحماية أولاً ")
  os.exit()
end



SSC=gg.isPackageInstalled("nkr.antiban.general") if SSC==false then gg.alert("للمشتركين فقط !") os.exit() end

function split(szFullString, szSeparator) local nFindStartIndex = 1 local nSplitIndex = 1 local nSplitArray = {} while true do local nFindLastIndex = string.find (szFullString, szSeparator, nFindStartIndex) if not nFindLastIndex then nSplitArray[nSplitIndex] = string.sub(szFullString, nFindStartIndex, string.len (szFullString)) break end nSplitArray[nSplitIndex] = string.sub (szFullString, nFindStartIndex, nFindLastIndex - 1) nFindStartIndex = nFindLastIndex + string.len (szSeparator) nSplitIndex = nSplitIndex + 1 end return nSplitArray end function xgxc(szpy, qmxg) for x = 1, #(qmxg) do xgpy = szpy + qmxg[x]["offset"] xglx = qmxg[x]["type"] xgsz = qmxg[x]["value"] xgdj = qmxg[x]["freeze"] if xgdj == nil or xgdj == "" then gg.setValues({[1] = {address = xgpy, flags = xglx, value = xgsz}}) else gg.addListItems({[1] = {address = xgpy, flags = xglx, freeze = xgdj, value = xgsz}}) end xgsl = xgsl + 1 xgjg = true end end function xqmnb(qmnb) gg.clearResults() gg.setRanges(qmnb[1]["memory"]) gg.searchNumber(qmnb[3]["value"], qmnb[3]["type"]) if gg.getResultCount() == 0 then gg.toast(qmnb[2]["name"] .. "开启失败") else gg.refineNumber(qmnb[3]["value"], qmnb[3]["type"]) gg.refineNumber(qmnb[3]["value"], qmnb[3]["type"]) gg.refineNumber(qmnb[3]["value"], qmnb[3]["type"]) if gg.getResultCount() == 0 then gg.toast(qmnb[2]["name"] .. "开启失败") else sl = gg.getResults(999999) sz = gg.getResultCount() xgsl = 0 if sz > 999999 then sz = 999999 end for i = 1, sz do pdsz = true for v = 4, #(qmnb) do if pdsz == true then pysz = {} pysz[1] = {} pysz[1].address = sl[i].address + qmnb[v]["offset"] pysz[1].flags = qmnb[v]["type"] szpy = gg.getValues(pysz) pdpd = qmnb[v]["lv"] .. ";" .. szpy[1].value szpd = split(pdpd, ";") tzszpd = szpd[1] pyszpd = szpd[2] if tzszpd == pyszpd then pdjg = true pdsz = true else pdjg = false pdsz = false end end end if pdjg == true then szpy = sl[i].address xgxc(szpy, qmxg) end end if xgjg == true then gg.toast(qmnb[2]["name"] .. "开启成功，一共修改" .. xgsl .. "条数据") else gg.toast(qmnb[2]["name"] .. "未搜索到数据，开启失败") end end end end function SearchWrite(Search, Write, Type) gg.clearResults() gg.setVisible(false) gg.searchNumber(Search[1][1], Type) local count = gg.getResultCount() local result = gg.getResults(count) gg.clearResults() local data = {} local base = Search[1][2] if (count > 0) then for i, v in ipairs(result) do v.isUseful = true end for k=2, #Search do local tmp = {} local offset = Search[k][2] - base local num = Search[k][1] for i, v in ipairs(result) do tmp[#tmp+1] = {} tmp[#tmp].address = v.address + offset tmp[#tmp].flags = v.flags end tmp = gg.getValues(tmp) for i, v in ipairs(tmp) do if ( tostring(v.value) ~= tostring(num) ) then result[i].isUseful = false end end end for i, v in ipairs(result) do if (v.isUseful) then data[#data+1] = v.address end end if (#data > 0) then local t = {} local base = Search[1][2] for i=1, #data do for k, w in ipairs(Write) do offset = w[2] - base t[#t+1] = {} t[#t].address = data[i] + offset t[#t].flags = Type t[#t].value = w[1] if (w[3] == true) then local item = {} item[#item+1] = t[#t] item[#item].freeze = true gg.addListItems(item) end end end gg.setValues(t) gg.toast("开启成功，一共修改"..#t.."条数据") gg.addListItems(t) else gg.toast("未搜索到数据，开启失败", false) return false end else gg.toast("Not Found") return false end end



function HOME()
MENU = gg.choice({
"┌BYPASS ⚔️\n└⟬حماية ⟭』",
"┌RE-START 😶\n└⟬ ترسـيـت ⟭",
"┌WALLHACK👻\n└⟬وللهاك ⟭』",
"┌Lobby menu 🥇\n└⟬ لوبـي ⟭",
"┌Game menu 🥈\n└⟬ القيم ⟭",
"┌Private menu 🏅\n└⟬ خاص ⟭",
"┌Exite ⁦🎗️⁩\n└⟬ خـروج ⟭",}, nil, "╔━━━━━━━━━▣ ⁦⁦👑 ▣━━━━━━━━━╗\n  🦜   👑GENERAL VIP HACK S16 👑    🦜 \n╚━━━━━━━━━▣  👑 ▣━━━━━━━━━╝")
    if MENU == nil then
  else
      if MENU == 1 then Bypass()
end    
      if MENU == 2 then MN1()
end    
    if MENU == 3 then WHC()
end    
    if MENU == 4 then LOB()
end
    if MENU == 5 then MN3()
end
    if MENU == 6 then MN4()
end
    if MENU == 7 then EXIT()
end
  end
  PUBGMH = -1
end


function Bypass() 
BY = gg.multiChoice({
"┌BYPASS1GLOBAL ⁦1️⃣\n└⟬حماية 1 عالمية⟭",
"┌BYPASS2 ⁦GLOBAL2️⃣\n└⟬ حماية 2 عالمية⟭",
"┌BYPASS3 ᴋᴏʀᴇᴀ.   3️⃣\n└⟬حماية 3 كورية⟭",
"┌BYPASS4 ᴋᴏʀᴇᴀ.   4️⃣\n└⟬حماية 4 كورية⟭",
"┌BYPASS5 ᴠɪᴇᴛɴᴀᴍ5️⃣\n└⟬حماية 5 فيتنامية⟭",
"┌BYPASS5 GLOBAL6️⃣\n└⟬حماية 6 عالمية⟭",
"┌BYPASS5 GLOBAL7️⃣\n└⟬حماية 7 عالمية⟭",
"┌BACK ⁦〽️⁩\n└⟬ رجوع ⟭",}, nil, "╔━━━━━━━━━▣ ⁦⁦👑 ▣━━━━━━━━━╗\n  🦜   👑GENERAL VIP HACK S16👑    🦜 \n╚━━━━━━━━━▣  👑 ▣━━━━━━━━━╝")
  if BY == nil then
  else
    if BY [1] == true then BYPASS1()
end
    if BY [2] == true then BYPASS2()
end
    if BY [3] == true then BYPASS3()
end
    if BY [4] == true then BYPASS4()
end
    if BY [5] == true then BYPASS5()
end
if BY [6] == true then BYPASS6()
end
if BY [7] == true then BYPASS7()
end
    if BY [8] == true then HOME()
end
end
PUBGMH = -1
end

function BYPASS1()
gg.clearResults()
gg.setRanges(gg.REGION_C_ALLOC)
gg.setVisible(false)
gg.searchNumber("160;162;167;187;12289;1", gg.TYPE_DWORD, false, gg.SGN_EQUAL, 0, -1)
if gg.getResultCount() == 0 then
gg.alert("لم يتم تفعيل الحماية اعد تشغيل اللعبة ")
gg.setVisible(true)
gg.processKill()
os.exit()
else
gg.setVisible(false)
gg.searchNumber("1", gg.TYPE_DWORD, false, gg.SGN_EQUAL, 0, -1)
resultsCount = gg.getResultCount()
results = gg.getResults(resultsCount)
for x = 1, resultsCount do

gg.addListItems({
[1] = {
address = results[x].address + 0,
flags = 4,
freeze = true,
value = 0
}
})

end
end
gg.clearResults()
gg.setRanges(gg.REGION_C_ALLOC)
gg.searchNumber("131586", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)

jg = gg.getResults(1000)
sl = gg.getResultCount()
if 1000 < sl then
  sl = 1000
end
for i = 1, sl do
  dzy = jg[i].address
  gg.addListItems({
    [1] = {
      address = dzy,
      flags = gg.TYPE_DWORD,
      freeze = true,
      value = 0
    }
  })
end
gg.clearResults()
gg.setVisible(false)
gg.setRanges(gg.REGION_C_ALLOC)
gg.searchNumber("133378", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1, 0)

revert = gg.getResults(10000, nil, nil, nil, nil, nil, nil, nil, nil)
local t = gg.getResults(10000, nil, nil, nil, nil, nil, nil, nil, nil)
for i, v in ipairs(t) do
	if v.flags == gg.TYPE_DWORD then
		v.value = "0"
		v.freeze = true
	end
end
gg.addListItems(t)
t = nil
gg.clearResults()

gg.alert("🔴 تم تفعيل الحماية بنجاح 🔴 \n ⚫ لا تكشف نفسك وتعرض نفسك للبلاغات ⚫")

end


function BYPASS2()
gg.clearResults()
    gg.searchNumber("9|||||||||||||||||||||||||||||||||||||9|||||||||||||||||||9|||||||||||||||||||||||||||||||||||9|||||||||||||||||||||||||||||||||||9|||||||||||||||||||||||||||||||||||9|||||||||||||||||||||||||||||||||||9|||||||||||||||||||||||||||||||||||9", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResults(1)
    gg.editAll("1|||||||||||||||||||||9||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||7|||||||||||||||||||||||||||||||||||||||||||||||||||00|||||||||||||||||||||3|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||70||||||||||||||||||||||||||||||||||||||||||||||||||||7||||||||||||||||||||||||||||||||||||||||||||||||||||8", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("135682;144387", gg.TYPE_DWORD)
    gg.refineNumber("135682", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("134658;131586", gg.TYPE_DWORD)
    gg.refineNumber("134658", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("134914;262403", gg.TYPE_DWORD)
    gg.refineNumber("134914", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("13||||||||||337|||||||||||||||||||||8;26||||||||||24|||||||||||||||||||||03", gg.TYPE_DWORD)
    gg.refineNumber("1||||||||||3||||||||||33||||||||||7|||||||||||8", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("131330;133634", gg.TYPE_DWORD)
    gg.refineNumber("131330", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("131842;132098", gg.TYPE_DWORD)
    gg.refineNumber("131842", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("1|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||3||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||2||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||0|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||9|||||||||||||||||||||||||||||||||||8", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.getResultsCount()
    gg.getResults(0)
    gg.clearResults()
    gg.setRanges(gg.REGION_ANONYMOUS)
    gg.searchNumber("16610;8388646;8388805", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResults(50)
    gg.editAll("30", gg.TYPE_DWORD)
    gg.clearResults()
    gg.searchNumber("2||||||||||||||||5||||||||||||||||7D;0~9||||||||||||||||||||||||999||||||||||||||9F;1D;0||||||||||||||||||||D::3|||||||||||||||||||||||||||00", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResultsCount()
    gg.searchNumber("0~9999", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResults(100)
    gg.clearResults()
    gg.getResults(100)
    gg.addListItems({})
    gg.clearResults()
gg.alert("🔴 تم تفعيل الحماية بنجاح 🔴 \n ⚫ لا تكشف نفسك وتعرض نفسك للبلاغات ⚫")

end




function BYPASS3()
os.remove("src/main/java/com/google/errorprone/annotations")
os.remove("src/main/java/com/google/errorprone/annotations")
os.remove("src/main/java/com/google/errorprone/annotations/concurrent")
os.remove("third_party.java_src.error_prone.project.annotations.Google_internal")
gg.clearResults()
gg.setRanges(gg.REGION_C_ALLOC)
gg.searchNumber("2.2958874e-41;16384D;16384D;16384D;16384D;16384D::24", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResultsCount()
gg.clearResults()
gg.setRanges(gg.REGION_CODE_APP)
gg.searchNumber("11,932;12,004;32,768;65,536", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
if gg.getResultCount() == 0 then
else
gg.searchNumber("2.2958874e-41", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
n = gg.getResultCount()
pg = gg.getResults(n)
for i = 1, n do
gg.addListItems({[1] = {address = we[i].address - 252,flags = 4,freeze = true,value = 70086}})
gg.addListItems({[1] = {address = we[i].address - 236,flags = 4,freeze = true,value = 70086}})
gg.addListItems({[1] = {address = we[i].address - 232,flags = 4,freeze = true,value = 70086}})
gg.addListItems({[1] = {address = we[i].address - 72,flags = 4,freeze = true,value = 70086}})
gg.addListItems({[1] = {address = we[i].address - 68,flags = 4,freeze = true,value = 70086}})
gg.addListItems({[1] = {address = we[i].address - 64,flags = 4,freeze = true,value = 70086}})
gg.addListItems({[1] = {address = we[i].address + 30,flags = 4,freeze = true,value = 119}})
gg.addListItems({[1] = {address = we[i].address + 130,flags = 4,freeze = true,value = 70086}})
gg.addListItems({[1] = {address = we[i].address + 180,flags = 4,freeze = true,value = 70086}})
gg.addListItems({[1] = {address = we[i].address + 200,flags = 4,freeze = true,value = 4451}})
gg.addListItems({[1] = {address = we[i].address + 300,flags = 4,freeze = true,value = 0}})
gg.addListItems({[1] = {address = we[i].address + 310,flags = 4,freeze = true,value = 70086}})
gg.addListItems({[1] = {address = we[i].address + 360,flags = 4,freeze = true,value = 70086}})
gg.addListItems({[1] = {address = we[i].address + 450,flags = 4,freeze = true,value = 70086}})
gg.addListItems({[1] = {address = we[i].address + 650,flags = 4,freeze = true,value = 70086}})
gg.addListItems({[1] = {address = we[i].address + 800,flags = 4,freeze = true,value = 70086}})
end 
end 
gg.clearResults()
gg.setRanges(gg.REGION_C_ALLOC)
gg.searchNumber("4096;135682", gg.TYPE_DWORD)
gg.refineNumber("4096", gg.TYPE_DWORD)
gg.getResults(50000)
gg.editAll("0", gg.TYPE_DWORD)
gg.setRanges(gg.REGION_C_ALLOC)
gg.searchNumber("134914;262403", gg.TYPE_DWORD)
gg.refineNumber("134914", gg.TYPE_DWORD)
gg.getResults(50000)
gg.editAll("0", gg.TYPE_DWORD)
gg.clearResults()
gg.setRanges(gg.REGION_C_ALLOC)
gg.searchNumber("133378;262403", gg.TYPE_DWORD)
gg.refineNumber("133378", gg.TYPE_DWORD)
gg.getResults(50000)
gg.editAll("0", gg.TYPE_DWORD)
gg.clearResults()
gg.setRanges(gg.REGION_C_ALLOC)
gg.searchNumber("131330;133634", gg.TYPE_DWORD)
gg.refineNumber("131330", gg.TYPE_DWORD)
gg.getResults(50000)
gg.editAll("0", gg.TYPE_DWORD)
gg.clearResults()
gg.setRanges(gg.REGION_C_ALLOC)
gg.searchNumber("131842;132098", gg.TYPE_DWORD)
gg.refineNumber("131842", gg.TYPE_DWORD)
gg.getResults(50000)
gg.editAll("0", gg.TYPE_DWORD)
gg.clearResults()
gg.clearList()
gg.setRanges(gg.REGION_CODE_APP)
gg.searchNumber("9.21956299e-41", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1, 0)
gg.refineNumber("9.21956299e-41;9.21956299e-41", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1, 0)
gg.refineNumber("9.21956299e-41;9.21956299e-41;9.21956299e-41", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1, 0)
gg.refineNumber("9.21956299e-41;9.21956299e-41;9.21956299e-41;9.21956299e-41", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1, 0)
gg.getResults(100, nil, nil, nil, nil, nil, nil, nil, nil)
gg.getResults(100, nil, nil, nil, nil, nil, nil, nil, nil)
gg.clearResults()
gg.clearList()

  gg.alert(" 🛡 ʙʏᴘᴀss korea 3🇰🇷🛡  🧤☑ᴀᴄᴛɪᴠᴀᴛᴇ☑🧤")
gg.alert("🔴 تم تفعيل الحماية بنجاح 🔴 \n ⚫ لا تكشف نفسك وتعرض نفسك للبلاغات ⚫")

end


function BYPASS4()
gg.clearResults()
    gg.searchNumber("9|||||||||||||||||||||||||||||||||||||9|||||||||||||||||||9|||||||||||||||||||||||||||||||||||9|||||||||||||||||||||||||||||||||||9|||||||||||||||||||||||||||||||||||9|||||||||||||||||||||||||||||||||||9|||||||||||||||||||||||||||||||||||9", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResults(1)
    gg.editAll("1|||||||||||||||||||||9||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||7|||||||||||||||||||||||||||||||||||||||||||||||||||00|||||||||||||||||||||3|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||70||||||||||||||||||||||||||||||||||||||||||||||||||||7||||||||||||||||||||||||||||||||||||||||||||||||||||8", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("135682;144387", gg.TYPE_DWORD)
    gg.refineNumber("135682", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("134658;131586", gg.TYPE_DWORD)
    gg.refineNumber("134658", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("134914;262403", gg.TYPE_DWORD)
    gg.refineNumber("134914", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("13||||||||||337|||||||||||||||||||||8;26||||||||||24|||||||||||||||||||||03", gg.TYPE_DWORD)
    gg.refineNumber("1||||||||||3||||||||||33||||||||||7|||||||||||8", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("131330;133634", gg.TYPE_DWORD)
    gg.refineNumber("131330", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("131842;132098", gg.TYPE_DWORD)
    gg.refineNumber("131842", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("1|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||3||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||2||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||0|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||9|||||||||||||||||||||||||||||||||||8", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.getResultsCount()
    gg.getResults(0)
    gg.clearResults()
    gg.setRanges(gg.REGION_ANONYMOUS)
    gg.searchNumber("16610;8388646;8388805", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResults(50)
    gg.editAll("30", gg.TYPE_DWORD)
    gg.clearResults()
    gg.searchNumber("2||||||||||||||||5||||||||||||||||7D;0~9||||||||||||||||||||||||999||||||||||||||9F;1D;0||||||||||||||||||||D::3|||||||||||||||||||||||||||00", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResultsCount()
    gg.searchNumber("0~9999", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResults(100)
    gg.clearResults()
    gg.getResults(100)
    gg.addListItems({})
    gg.clearResults()
  gg.alert(" 🛡 ʙʏᴘᴀss kr 4 🇰🇷🛡  🧤☑ᴀᴄᴛɪᴠᴀᴛᴇ☑🧤")
gg.alert("🔴 تم تفعيل الحماية بنجاح 🔴 \n ⚫ لا تكشف نفسك وتعرض نفسك للبلاغات ⚫")
end

function BYPASS5()

os.remove("src/main/java/com/google/errorprone/annotations")
os.remove("src/main/java/com/google/errorprone/annotations")
os.remove("src/main/java/com/google/errorprone/annotations/concurrent")
os.remove("third_party.java_src.error_prone.project.annotations.Google_internal")
gg.clearResults()
    gg.searchNumber("9|||||||||||||||||||||||||||||||||||||9|||||||||||||||||||9|||||||||||||||||||||||||||||||||||9|||||||||||||||||||||||||||||||||||9|||||||||||||||||||||||||||||||||||9|||||||||||||||||||||||||||||||||||9|||||||||||||||||||||||||||||||||||9", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResults(1)
    gg.editAll("1|||||||||||||||||||||9||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||7|||||||||||||||||||||||||||||||||||||||||||||||||||00|||||||||||||||||||||3|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||70||||||||||||||||||||||||||||||||||||||||||||||||||||7||||||||||||||||||||||||||||||||||||||||||||||||||||8", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("135682;144387", gg.TYPE_DWORD)
    gg.refineNumber("135682", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("134658;131586", gg.TYPE_DWORD)
    gg.refineNumber("134658", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("134914;262403", gg.TYPE_DWORD)
    gg.refineNumber("134914", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("13||||||||||337|||||||||||||||||||||8;26||||||||||24|||||||||||||||||||||03", gg.TYPE_DWORD)
    gg.refineNumber("1||||||||||3||||||||||33||||||||||7|||||||||||8", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("131330;133634", gg.TYPE_DWORD)
    gg.refineNumber("131330", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("131842;132098", gg.TYPE_DWORD)
    gg.refineNumber("131842", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("1|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||3||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||2||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||0|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||9|||||||||||||||||||||||||||||||||||8", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.getResultsCount()
    gg.getResults(0)
    gg.clearResults()
    gg.setRanges(gg.REGION_ANONYMOUS)
    gg.searchNumber("16610;8388646;8388805", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResults(50)
    gg.editAll("30", gg.TYPE_DWORD)
    gg.clearResults()
    gg.searchNumber("2||||||||||||||||5||||||||||||||||7D;0~9||||||||||||||||||||||||999||||||||||||||9F;1D;0||||||||||||||||||||D::3|||||||||||||||||||||||||||00", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResultsCount()
    gg.searchNumber("0~9999", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResults(100)
    gg.clearResults()
    gg.getResults(100)
    gg.addListItems({})
    gg.clearResults()
    gg.clearResults()
    gg.searchNumber("9|||||||||||||||||||||||||||||||||||||9|||||||||||||||||||9|||||||||||||||||||||||||||||||||||9|||||||||||||||||||||||||||||||||||9|||||||||||||||||||||||||||||||||||9|||||||||||||||||||||||||||||||||||9|||||||||||||||||||||||||||||||||||9", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResults(1)
    gg.editAll("1|||||||||||||||||||||9||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||7|||||||||||||||||||||||||||||||||||||||||||||||||||00|||||||||||||||||||||3|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||70||||||||||||||||||||||||||||||||||||||||||||||||||||7||||||||||||||||||||||||||||||||||||||||||||||||||||8", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("135682;144387", gg.TYPE_DWORD)
    gg.refineNumber("135682", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("134658;131586", gg.TYPE_DWORD)
    gg.refineNumber("134658", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("134914;262403", gg.TYPE_DWORD)
    gg.refineNumber("134914", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("13||||||||||337|||||||||||||||||||||8;26||||||||||24|||||||||||||||||||||03", gg.TYPE_DWORD)
    gg.refineNumber("1||||||||||3||||||||||33||||||||||7|||||||||||8", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("131330;133634", gg.TYPE_DWORD)
    gg.refineNumber("131330", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("131842;132098", gg.TYPE_DWORD)
    gg.refineNumber("131842", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("1|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||3||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||2||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||0|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||9|||||||||||||||||||||||||||||||||||8", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.getResultsCount()
    gg.getResults(0)
    gg.clearResults()
    gg.setRanges(gg.REGION_ANONYMOUS)
    gg.searchNumber("16610;8388646;8388805", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResults(50)
    gg.editAll("30", gg.TYPE_DWORD)
    gg.clearResults()
    gg.searchNumber("2||||||||||||||||5||||||||||||||||7D;0~9||||||||||||||||||||||||999||||||||||||||9F;1D;0||||||||||||||||||||D::3|||||||||||||||||||||||||||00", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResultsCount()
    gg.searchNumber("0~9999", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResults(100)
    gg.clearResults()
    gg.getResults(100)
    gg.addListItems({})
    gg.clearResults()
    gg.alert(" 🛡 ʙʏᴘᴀss 🇻🇳🛡  🧤☑ᴀᴄᴛɪᴠᴀᴛᴇ☑🧤")
gg.alert("🔴 تم تفعيل الحماية بنجاح 🔴 \n ⚫ لا تكشف نفسك وتعرض نفسك للبلاغات ⚫")

end


function BYPASS6()
gg.clearResults()
gg.setRanges(gg.REGION_C_ALLOC)
gg.searchNumber("1.86902378e-40", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.setVisible(false)
revert = gg.getResults(50000, nil, nil, nil, nil, nil, nil, nil, nil)
gg.editAll("0", gg.TYPE_FLOAT)
gg.setVisible(false)
gg.clearResults()
gg.setRanges(gg.REGION_C_ALLOC)
gg.searchNumber("1.8439126e-40", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.setVisible(false)
revert = gg.getResults(50000, nil, nil, nil, nil, nil, nil, nil, nil)
gg.editAll("0", gg.TYPE_FLOAT)
gg.setVisible(false)
gg.clearResults()
gg.setRanges(gg.REGION_C_ALLOC)
gg.searchNumber("1.8726112e-40", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)       
gg.setVisible(false)
revert = gg.getResults(50000, nil, nil, nil, nil, nil, nil, nil, nil)
gg.editAll("0", gg.TYPE_FLOAT)
gg.setVisible(false)
gg.clearResults()
gg.setRanges(gg.REGION_C_ALLOC)
gg.searchNumber("1.8403253e-40", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.setVisible(false)
revert = gg.getResults(50000, nil, nil, nil, nil, nil, nil, nil, nil)
gg.editAll("0", gg.TYPE_FLOAT)
gg.setVisible(false)
gg.clearResults()
gg.setRanges(gg.REGION_C_ALLOC)
gg.setVisible(false)
gg.searchNumber("133,732", gg.TYPE_DWORD)
revert = gg.getResults(50000, nil, nil, nil, nil, nil, nil, nil, nil)
gg.editAll("0", gg.TYPE_DWORD)
gg.setVisible(false)
gg.clearResults()
gg.setRanges(gg.REGION_C_ALLOC)
gg.setVisible(false)
gg.searchNumber("925906226", gg.TYPE_DWORD)
revert = gg.getResults(50000, nil, nil, nil, nil, nil, nil, nil, nil)
gg.editAll("0", gg.TYPE_DWORD)
gg.setVisible(false)
gg.clearResults()
gg.setRanges(16384)
gg.searchNumber("1.9204614e31", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.setVisible(false)
revert = gg.getResults(50000, nil, nil, nil, nil, nil, nil, nil, nil)
gg.editAll("0", gg.TYPE_FLOAT)
gg.setVisible(false)
gg.clearResults()
gg.setVisible(false)
gg.setRanges(16384)
gg.searchNumber("1,601,463,655", gg.TYPE_DWORD)
gg.setVisible(false)
revert = gg.getResults(50000, nil, nil, nil, nil, nil, nil, nil, nil)
gg.editAll("0", gg.TYPE_DWORD)
gg.setVisible(false)
gg.clearResults()
gg.setRanges(16384)
gg.searchNumber("825.14465332031", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.setVisible(false)
revert = gg.getResults(50000, nil, nil, nil, nil, nil, nil, nil, nil)
gg.editAll("0", gg.TYPE_FLOAT)
gg.setVisible(false)
gg.clearResults()
gg.setRanges(8)
gg.searchNumber("825.14465332031", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.setVisible(false)
revert = gg.getResults(50000, nil, nil, nil, nil, nil, nil, nil, nil)
gg.editAll("0", gg.TYPE_FLOAT)
gg.setVisible(false)
gg.clearResults()
gg.setRanges(16384)
gg.searchNumber("3.2089735e-43", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.setVisible(false)
revert = gg.getResults(50000, nil, nil, nil, nil, nil, nil, nil, nil)
gg.editAll("0", gg.TYPE_FLOAT)
gg.setVisible(false)
gg.clearResults()
gg.setRanges(8)
gg.searchNumber("3.2089735e-43", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.setVisible(false)
revert = gg.getResults(50000, nil, nil, nil, nil, nil, nil, nil, nil)
gg.editAll("0", gg.TYPE_FLOAT)
gg.setVisible(false)
gg.clearResults()

gg.alert("🔴 تم تفعيل الحماية بنجاح 🔴 \n ⚫ لا تكشف نفسك وتعرض نفسك للبلاغات ⚫")


end

function BYPASS7()

gg.clearResults()
gg.setRanges(gg.REGION_C_ALLOC)
gg.searchNumber("1.86902378e-40", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.setVisible(false)
local GENERAL = gg.getResults(50000)
for i, v in ipairs(GENERAL) do
GENERAL[i].flags = gg.TYPE_FLOAT
GENERAL[i].value = '0'
GENERAL[i].freeze = true
end
gg.addListItems(GENERAL)
gg.setVisible(false)
gg.clearResults()
gg.setRanges(gg.REGION_C_ALLOC)
gg.searchNumber("1.8439126e-40", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.setVisible(false)
local GENERAL = gg.getResults(50000)
for i, v in ipairs(GENERAL) do
GENERAL[i].flags = gg.TYPE_FLOAT
GENERAL[i].value = '0'
GENERAL[i].freeze = true
end
gg.addListItems(GENERAL)
gg.setVisible(false)
gg.clearResults()
gg.setRanges(gg.REGION_C_ALLOC)
gg.searchNumber("1.8726112e-40", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)   
gg.setVisible(false)
local GENERAL = gg.getResults(50000)
for i, v in ipairs(GENERAL) do
GENERAL[i].flags = gg.TYPE_FLOAT
GENERAL[i].value = '0'
GENERAL[i].freeze = true
end
gg.addListItems(GENERAL)
gg.setVisible(false)
gg.clearResults()
gg.setRanges(gg.REGION_C_ALLOC)
gg.searchNumber("1.8403253e-40", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.setVisible(false)
local GENERAL = gg.getResults(50000)
for i, v in ipairs(GENERAL) do
GENERAL[i].flags = gg.TYPE_FLOAT
GENERAL[i].value = '0'
GENERAL[i].freeze = true
end
gg.addListItems(GENERAL)
gg.setVisible(false)
gg.clearResults()
gg.setRanges(gg.REGION_C_ALLOC)
gg.setVisible(false)
gg.searchNumber("133,732", gg.TYPE_DWORD)
local GENERAL = gg.getResults(50000)
for i, v in ipairs(GENERAL) do
GENERAL[i].flags = gg.TYPE_DWORD
GENERAL[i].value = '0'
GENERAL[i].freeze = true
end
gg.addListItems(GENERAL)
gg.setVisible(false)
gg.clearResults()
gg.setRanges(gg.REGION_C_ALLOC)
gg.setVisible(false)
gg.searchNumber("925906226", gg.TYPE_DWORD)
local GENERAL = gg.getResults(50000)
for i, v in ipairs(GENERAL) do
GENERAL[i].flags = gg.TYPE_DWORD
GENERAL[i].value = '0'
GENERAL[i].freeze = true
end
gg.addListItems(GENERAL)
gg.setVisible(false)
gg.clearResults()
gg.setRanges(16384)
gg.searchNumber("1.9204614e31", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.setVisible(false)
local GENERAL = gg.getResults(50000)
for i, v in ipairs(GENERAL) do
GENERAL[i].flags = gg.TYPE_FLOAT
GENERAL[i].value = '0'
GENERAL[i].freeze = true
end
gg.addListItems(GENERAL)
gg.setVisible(false)
gg.clearResults()
gg.setVisible(false)
gg.setRanges(16384)
gg.searchNumber("1,601,463,655", gg.TYPE_DWORD)
gg.setVisible(false)
local GENERAL = gg.getResults(50000)
for i, v in ipairs(GENERAL) do
GENERAL[i].flags = gg.TYPE_DWORD
GENERAL[i].value = '0'
GENERAL[i].freeze = true
end
gg.addListItems(GENERAL)
gg.setVisible(false)
gg.clearResults()
gg.setRanges(16384)
gg.searchNumber("825.14465332031", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.setVisible(false)
local GENERAL = gg.getResults(50000)
for i, v in ipairs(GENERAL) do
GENERAL[i].flags = gg.TYPE_FLOAT
GENERAL[i].value = '0'
GENERAL[i].freeze = true
end
gg.addListItems(GENERAL)
gg.setVisible(false)
gg.clearResults()
gg.setRanges(8)
gg.searchNumber("825.14465332031", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.setVisible(false)
local GENERAL = gg.getResults(50000)
for i, v in ipairs(GENERAL) do
GENERAL[i].flags = gg.TYPE_FLOAT
GENERAL[i].value = '0'
GENERAL[i].freeze = true
end
gg.addListItems(GENERAL)
gg.setVisible(false)
gg.clearResults()
gg.setRanges(16384)
gg.searchNumber("3.2089735e-43", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.setVisible(false)
local GENERAL = gg.getResults(50000)
for i, v in ipairs(GENERAL) do
GENERAL[i].flags = gg.TYPE_FLOAT
GENERAL[i].value = '0'
GENERAL[i].freeze = true
end
gg.addListItems(GENERAL)
gg.setVisible(false)
gg.clearResults()
gg.setRanges(8)
gg.searchNumber("3.2089735e-43", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.setVisible(false)
local GENERAL = gg.getResults(50000)
for i, v in ipairs(GENERAL) do
GENERAL[i].flags = gg.TYPE_FLOAT
GENERAL[i].value = '0'
GENERAL[i].freeze = true
end
gg.addListItems(GENERAL)
gg.setVisible(false)
gg.clearResults()
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("2.2958874e-41;16384D;16384D;16384D;16384D::24", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
    if gg.getResultCount() == 0 then
      gg.alert(("اعد تشغيل الحماية واللعبة   لم يتم تفعيل الحماية "))
      gg.setVisible(true)
      gg.processKill()
      os.exit()
    end
    gg.clearResults()
    gg.clearResults()
    gg.setRanges(gg.REGION_CODE_APP)
    gg.searchNumber("11,932;12,004;32,768;65,536", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResultsCount()
    gg.clearResults()
    gg.searchNumber("99999999", 4, false, 536870912, 0, -1)
    gg.getResults(1)
    gg.editAll("1970037078", 4)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("135682;144387", gg.TYPE_DWORD)
    gg.refineNumber("135682", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("134658;131586", gg.TYPE_DWORD)
    gg.refineNumber("134658", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("134914;262403", gg.TYPE_DWORD)
    gg.refineNumber("134914", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("133378;262403", gg.TYPE_DWORD)
    gg.refineNumber("133378", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("131330;133634", gg.TYPE_DWORD)
    gg.refineNumber("131330", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("131842;132098", gg.TYPE_DWORD)
    gg.refineNumber("131842", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_ALLOC)
    gg.searchNumber("132098", gg.TYPE_DWORD)
    gg.getResults(50000)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    
    gg.setRanges(gg.REGION_CODE_APP)
    gg.searchNumber("9.21956299e-41", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1, 0)
    gg.refineNumber("9.21956299e-41;9.21956299e-41", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1, 0)
    gg.refineNumber("9.21956299e-41;9.21956299e-41;9.21956299e-41", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1, 0)
    gg.refineNumber("9.21956299e-41;9.21956299e-41;9.21956299e-41;9.21956299e-41", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1, 0)
    gg.getResults(100, nil, nil, nil, nil, nil, nil, nil, nil)
    gg.getResults(100, nil, nil, nil, nil, nil, nil, nil, nil)
    gg.clearResults()
    
    gg.clearResults()
    gg.searchNumber("12755", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1, 0)
    revert = gg.getResults(900, nil, nil, nil, nil, nil, nil, nil, nil)
    for i, v in ipairs((gg.getResults(900, nil, nil, nil, nil, nil, nil, nil, nil))) do
      if v.flags == gg.TYPE_DWORD then
        v.value = "0"
        v.freeze = true
      end
    end
    gg.addListItems((gg.getResults(900, nil, nil, nil, nil, nil, nil, nil, nil)))
    gg.clearResults()
    gg.searchNumber("12731", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1, 0)
    revert = gg.getResults(900, nil, nil, nil, nil, nil, nil, nil, nil)
    for i, v in ipairs((gg.getResults(900, nil, nil, nil, nil, nil, nil, nil, nil))) do
      if v.flags == gg.TYPE_DWORD then
        v.value = "0"
        v.freeze = true
      end
    end
    gg.addListItems((gg.getResults(900, nil, nil, nil, nil, nil, nil, nil, nil)))
    gg.clearResults()
    gg.searchNumber("12699", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
    revert = gg.getResults(50000, nil, nil, nil, nil, nil, nil, nil, nil)
    for i, v in ipairs((gg.getResults(50000, nil, nil, nil, nil, nil, nil, nil, nil))) do
      if v.flags == gg.TYPE_DWORD then
        v.value = "0"
        v.freeze = true
      end
    end
    gg.addListItems((gg.getResults(50000, nil, nil, nil, nil, nil, nil, nil, nil)))
    gg.clearResults()

gg.alert("🔴 تم تفعيل الحماية بنجاح 🔴 \n ⚫ لا تكشف نفسك وتعرض نفسك للبلاغات ⚫")

end


function MN1()
gg.clearResults()
gg.setRanges(gg.REGION_CODE_APP)
gg.searchNumber('220676386071773185', gg.TYPE_QWORD)
gg.getResults(69)
gg.editAll('220676386036121600', gg.TYPE_QWORD)
gg.sleep(6000)
gg.editAll('220676386071773185', gg.TYPE_QWORD)
gg.clearResults()
end


function LOB() 
ML = gg.multiChoice({
"┌NO RECOIL ⁦▶️⁩\n└⟬ ثبات 100 ⟭",
"┌LESS RECOIL ⁦👐\n└⟬ ثبات 50 ⟭",
"┌AIMLOCK 📶\n└⟬ ايم لوك  ⟭",
"┌INSTAHIT 🔆 \n└⟬ انـسـتا هيد ⟭",
"┌NO GRASS ⁦✳️⁩\n└⟬ إزالة عشب  ⟭",
"┌BACK ⁦〽️⁩\n└⟬ رجوع ⟭",}, nil, "╔━━━━━━━━━▣ ⁦⁦👑 ▣━━━━━━━━━╗\n  🦜   👑GENERAL VIP HACK S16 👑    🦜 \n╚━━━━━━━━━▣  👑 ▣━━━━━━━━━╝")
  if ML == nil then
  else
    if ML [1] == true then ML1()
end
    if ML [2] == true then LES()
end
    if ML [3] == true then ML2()
end
    if ML [4] == true then ML3()
end
    if ML [5] == true then ML4()
end
    if ML [6] == true then HOME()
end
end
PUBGMH = -1
end

function ML1() 
gg.clearResults()
gg.setRanges(8)
gg.setVisible(false)
gg.searchNumber("-2.2673448e24;-1.36203639e28", 16, false, 536870912, 0, -1)
gg.setVisible(false)
gg.setVisible(false)
gg.searchNumber("-1.36203639e28", 16, false, 536870912, 0, -1)
gg.setVisible(false)
gg.setVisible(false)
gg.getResults(99)
gg.editAll("0", 16)
gg.clearResults()
gg.setVisible(false)
gg.clearResults()
gg.setRanges(gg.REGION_CODE_APP)
gg.searchNumber("-1281263094875551231", gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.refineNumber("-1281263094875551231", gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.refineAddress("7B0", -1, gg.TYPE_QWORD, gg.SIGN_EQUAL, 0, -1)
gg.refineNumber("-1281263094875551231", gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(1401)
gg.editAll("-1281263098870628352", gg.TYPE_QWORD)
gg.clearResults()
gg.setRanges(gg.REGION_CODE_APP)
gg.searchNumber("3.8126822e-21;-1.1144502e28;-2.0291021e20:9", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.refineAddress("328")
gg.getResults(551)
gg.editAll("0", gg.TYPE_FLOAT)
gg.clearResults()
gg.setRanges(32)
gg.searchNumber("0.2~0.3;53;30;1::", 16, false, 536870912, 0, -1)
gg.searchNumber("0.2~0.3;1::", 16, false, 536870912, 0, -1)
gg.getResults(200)
gg.editAll("0", 16)
gg.clearResults()
gg.clearResults()
gg.setRanges(gg.REGION_CODE_APP)
gg.searchNumber("-2.2673448e24;-1.36203639e28", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("-1.36203639e28", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(99)
gg.editAll("0", gg.TYPE_FLOAT)
gg.clearResults()
gg.setRanges(gg.REGION_CODE_APP)
gg.searchNumber("-2.8111605e28;-3.7444097e28;-1.1144502e28;128.0::", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.refineNumber("-1.1144502e28", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(10)
gg.editAll("0", gg.TYPE_FLOAT)
gg.clearResults()
gg.setRanges(gg.REGION_CODE_APP)
gg.searchNumber("-6.1549454e27;1.8638966e-20;-1.1144502e28;0::", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.refineNumber("-1.1144502e28", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(1)
gg.editAll("0", gg.TYPE_FLOAT)
gg.clearResults()
gg.toast("No Recoil Successful!")
end

function LES()
gg.clearResults()
gg.setRanges(gg.REGION_CODE_APP)
gg.searchNumber('-5.72701631e27;-2.78698203e28;-3.74440972e28:9', gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.refineNumber("-2.78698203e28")
gg.getResults(1)
gg.editAll('0', gg.TYPE_FLOAT)
gg.clearResults()
gg.toast("🔴   تم تفعيل ثبات 75%   🔴")
end
 
function ML2()
gg.setRanges(gg.REGION_CODE_APP)
gg.searchNumber("-290,174,237", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.refineNumber("-290,174,237", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(14)
gg.editAll("0", gg.TYPE_DWORD)
gg.clearResults()    
gg.toast("ايمبوت امن 100%")

end
 
function ML3()
gg.setRanges(gg.REGION_CODE_APP)
gg.searchNumber("-298284466;-1.304566e23F", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("-298284466", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(999)
gg.editAll("0", gg.TYPE_DWORD)
gg.clearResults()
gg.toast('Insta hit done')
end

function ML4() 
gg.clearResults()
gg.setRanges(gg.REGION_ANONYMOUS)
gg.searchNumber(":Default__MaterialExpressionLandscapeGrassOutput", gg.TYPE_BYTE, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(500)
gg.editAll("0", gg.TYPE_BYTE)
gg.clearResults()
gg.setVisible(false)
end

--------STEP[4] Game👇--------

function MN3() 
MG = gg.multiChoice({
"┌ANTINNA🤠\n└⟬انتنا ⟭",
"┌HEAD SHOT  🆘\n└⟬ ++ هيد ⟭",
"┌LONG JUMP 🚸\n└⟬ قفزة للأمام⟭", 
"┌AIMBOT 360 ⁦☢️⁩\n└⟬ أيمبوت ⟭",
"┌CROSS HEAD ⁦☣️⁩\n└⟬ عدم تناثر رصاص ⟭",
"┌SITScope 💲\n└⟬ سيت سكوب ⟭",
"┌SPEED KNOCK 💱\n└⟬ سبيد نوك ⟭",
"┌Fastparachute ⁦↔️⁩\n└⟬ نزول سريع ⟭",
"┌NoFog ⁦↔️⁩\n└⟬ازالة الضباب ⟭",
"┌BACK ⁦〽️⁩\n└⟬ رجوع ⟭",
}, nil, "╔━━━━━━━━━▣ ⁦⁦👑 ▣━━━━━━━━━╗\n           🦜   👑GENERAL VIP HACK👑    🦜 \n╚━━━━━━━━━▣  👑 ▣━━━━━━━━━╝")
  if MG == nil then
  else
  if MG [1] == true then ANT()
end
    if MG [2] == true then MG1()
end
    if MG [3] == true then MG2()
end
    if MG [4] == true then MG3()
end
    if MG [5] == true then SCH()
end
    if MG [6] == true then MG5()
end
    if MG [7] == true then MG6()
end
        if MG [8] == true then PSP()
end
if MG [9] == true then nofogss()
end
    if MG [10] == true then HOME()
end
  end
  PUBGMH = -1
end

function ANT()
gg.clearResults()
gg.setRanges(gg.REGION_ANONYMOUS)
gg.searchNumber("88.50576019287F;87.27782440186F;-100.91194152832F;1F::13", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("88.50576019287F;87.27782440186F;1F", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(100)
gg.editAll("1.96875;1.96875;999;1.96875;1.96875;999", gg.TYPE_FLOAT)
gg.clearResults()
gg.toast("🔴 تم تفعيل الانتينا فوق اللاعب 🔴")
end

function nofogss()
gg.setRanges(gg.REGION_CODE_APP) 
gg.searchNumber("-298,841,535",gg.TYPE_DWORD,false,gg.SIGN_EQUAL,0,-1)
gg.refineAddress("4C8")
gg.getResults(10)
gg.editAll("0",gg.TYPE_DWORD)
gg.clearResults()
 end
 
 
function MG1() 
gg.clearResults()
    gg.setRanges(gg.REGION_C_DATA | gg.REGION_CODE_APP)
    gg.searchNumber("0.10000000149;64.50088500977", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
    gg.refineNumber("0.10000000149", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResults(50)
    gg.editAll("8", gg.TYPE_FLOAT)
    gg.clearResults()
    gg.clearResults()
    gg.setRanges(gg.REGION_BAD)
    gg.searchNumber("-88.66608428955;26:512", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
    gg.searchNumber("26", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResults(2)
    gg.editAll("-460", gg.TYPE_FLOAT)
    gg.clearResults()
    gg.searchNumber("-88.73961639404;28:512", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
    gg.searchNumber("28", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResults(2)
    gg.editAll("-560", gg.TYPE_FLOAT)
    gg.clearResults()
    gg.setRanges(gg.REGION_ANONYMOUS)
    gg.searchNumber("9.201618;30.5;25", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
    gg.searchNumber("25;30.5", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResults(10)
    gg.editAll("250", gg.TYPE_FLOAT)
    gg.clearResults()
    gg.setRanges(gg.REGION_C_DATA | gg.REGION_CODE_APP)
    gg.searchNumber("-298284466;-1.304566e23F", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
    gg.searchNumber("-298284466", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResults(99)
    gg.editAll("0", gg.TYPE_DWORD)
    gg.clearResults()
    gg.clearResults()
    gg.setRanges(gg.REGION_C_DATA | gg.REGION_CODE_APP)
    gg.searchNumber("-1,883,348,481,058,764,210", gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
    gg.getResults(99)
    gg.editAll("-1,883,348,485,055,444,540", gg.TYPE_QWORD)
gg.clearResults()
gg.setRanges(gg.REGION_ANONYMOUS)
gg.searchNumber("9.201869,711,765D618;30.5;25", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("25;30.5", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(100)
gg.editAll("200;205", gg.TYPE_FLOAT)
gg.clearResults()
end

 
function MG2()
gg.clearResults()
 gg.setRanges(gg.REGION_ANONYMOUS)
 gg.searchNumber("16;4,575,657,222,473,777,152;1,065,353,216;17,179,869,188:37", gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
 local t = gg.getResults(1000)
 gg.searchNumber("4,575,657,222,473,777,152", gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
 local t = gg.getResults(500)
 gg.editAll("4,575,657,222,488,624,988", gg.TYPE_QWORD)
gg.clearResults()
 gg.setRanges(gg.REGION_ANONYMOUS)
 gg.searchNumber("1,133,903,872;4,611,686,019,455,831,245;1,103,626,240;4,575,657,222,517,817,344:25", gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
 local t = gg.getResults(1000)
 gg.searchNumber("4,611,686,019,455,831,245", gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
 local t = gg.getResults(500)
 gg.editAll("4,611,686,019,501,674,988", gg.TYPE_QWORD) 
 gg.clearResults()
 gg.toast("JUMP ACTIVATED")
gg.clearResults()
gg.setRanges(gg.REGION_CODE_APP)
gg.searchNumber("-6.1526231e27;-1.0070975e28::", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("-6.1526231e27", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(1)
gg.editAll("0", gg.TYPE_FLOAT)
gg.clearResults()
gg.toast("JUMP FIX")
end
 
function MG3()
gg.setRanges(gg.REGION_ANONYMOUS)
gg.searchNumber("3.5;1;0.5;200;20::", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("1", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(600)
gg.editAll("99999", gg.TYPE_FLOAT)
gg.clearResults()
gg.setRanges(gg.REGION_ANONYMOUS)
gg.searchNumber("-88.82363891602F;15.0F;1", gg.TYPE_FLOAT)
gg.searchNumber("1", gg.TYPE_FLOAT)
gg.getResults(2000)
gg.editAll("20000000000000", gg.TYPE_FLOAT)
gg.clearResults()
 gg.toast("أيمبوت ممتاز💫")
end

function SCH()
gg.clearResults() 
gg.setRanges(32)
gg.searchNumber("2~4;1.09375;1;18;3.5::25", 16, false, 536870912, 0, -1)
gg.searchNumber("2~4;1.09375::5", 16, false, 536870912, 0, -1)
gg.searchNumber("2~4", 16, false, 536870912, 0, -1)
gg.getResults(50)
gg.editAll("-0.5", 16)
gg.clearResults()
gg.toast("عدم تناثر رصاص  🥳")
end

function MG5()
gg.clearResults()
gg.setRanges(gg.REGION_ANONYMOUS)
gg.clearResults()
gg.searchNumber("18.38787841797;0.53867292404;-3.42232513428;1.77635705e-15:13", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.refineNumber("18.38787841797", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(2805)
gg.editAll("130.5419921875",gg.TYPE_FLOAT)
gg.clearResults()
gg.toast('😄 تم تفعيل الست سكوب 😁')

end

function MG6()
gg.clearResults()
gg.setRanges(gg.REGION_ANONYMOUS)
gg.searchNumber("0;7.0064923e-45;1;100;1;2,500,000,000.0;0.10000000149;88", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("1", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(100)
gg.editAll("9999", gg.TYPE_FLOAT)
gg.clearResults()
gg.toast("سبيد نوك 😤")
end

function PSP()
gg.clearResults() 
gg.setRanges(gg.REGION_ANONYMOUS) 
gg.searchNumber("0.75;150;1", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1) 
gg.refineNumber("1", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1) 
gg.getResults(999) 
gg.editAll("30", gg.TYPE_FLOAT) 
gg.clearResults() 
gg.searchNumber("0.75;150;30", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1) 
gg.refineNumber("0.75", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1) 
gg.getResults(999) 
gg.editAll("0", gg.TYPE_FLOAT) 
gg.clearResults() 
end

function MN4()
ML = gg.multiChoice({
"┌𝙷𝙴𝙰𝙳+𝙼𝙰𝙶𝙸𝙲 ❗\n└⟬ هيد+ ماجك ⟭",
"┌GENERAL VIP💰\n└⟬ خلطة جنرال  ⟭", 
"┌𝙵𝙻𝙰𝚂𝙷 𝟹𝟻𝟶𝙼 🧸\n└⟬ فلاش 350 متر ⟭",
"┌𝐕𝐈𝐏 𝐌𝐀𝐆𝐈𝐂 ⁦⚖️⁩\n└⟬ ماجك خاص  ⟭",
"┌𝚆𝙰𝙻𝙻𝚂𝙷𝙾𝚃 🧱\n└⟬ ضرب خلف جدار ⟭",
"┌𝙽𝙴𝚆 𝙹𝚄𝙼𝙿 𝚃𝙳𝙼 💵 \n└⟬ قفزة جديدة ⟭",
"┌𝙱𝙰𝙲𝙺 ⁦〽️⁩\n└⟬ رجوع ⟭",
}, nil, "╔━━━━━━━━━▣ ⁦⁦👑 ▣━━━━━━━━━╗\n           🦜   👑GENERAL VIP HACK👑    🦜 \n╚━━━━━━━━━▣  👑 ▣━━━━━━━━━╝")
  if ML == nil then
  else
    if ML [1] == true then MS1()
end
    if ML [2] == true then ABH()
end
    if ML [3] == true then MS2()
end
    if ML [4] == true then MS3()
end
    if ML [5] == true then MS4()
end
    if ML [6] == true then MS5()
end
    if ML [7] == true then HOME()
end
  end
  PUBGMH = -1
end

function MS1()
gg.setRanges(gg.REGION_CODE_APP)
gg.searchNumber("-1903895931231645695", gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.refineNumber("-1903895931231645695", gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.refineAddress("740", -1, gg.TYPE_QWORD, gg.SIGN_EQUAL, 0, -1)
gg.refineNumber("-1903895931231645695", gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(1401)
gg.editAll("-1903895931231645696", gg.TYPE_QWORD)
gg.clearResults()
gg.clearResults()
gg.setRanges(gg.REGION_CODE_APP)
gg.searchNumber("-1281263094875551231", gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.refineNumber("-1281263094875551231", gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.refineAddress("7B0", -1, gg.TYPE_QWORD, gg.SIGN_EQUAL, 0, -1)
gg.refineNumber("-1281263094875551231", gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(1401)
gg.editAll("-1281263098870628352", gg.TYPE_QWORD)
gg.clearResults()
gg.clearResults()
gg.setRanges(gg.REGION_CODE_APP)
gg.searchNumber("-1,883,348,481,058,764,210", gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("-1,883,348,481,058,764,210", gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(99)
gg.editAll("-1,883,348,485,055,444,540", gg.TYPE_QWORD)
gg.toast("انتظر وفجر السيرفر💥")
gg.searchNumber("-88.66608428955;26:512", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("26", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(2)
gg.editAll("-460", gg.TYPE_FLOAT)
gg.clearResults()
gg.searchNumber("-88.73961639404;28:512", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(2)
gg.editAll("-560", gg.TYPE_FLOAT)
gg.clearResults()
gg.setRanges(gg.REGION_ANONYMOUS)
gg.searchNumber("9.20161819458;23;25;30.5", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("25;30.5", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(1)
gg.editAll("260", gg.TYPE_FLOAT)
gg.searchNumber("30.5", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(1)
gg.editAll("260", gg.TYPE_FLOAT)
gg.clearResults()
gg.setRanges(gg.REGION_C_BSS)
gg.searchNumber("2048D;1F", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("1", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(100)
gg.editAll("0.07", gg.TYPE_FLOAT)
gg.clearResults()
gg.toast("تم تفعيل خلطة جنرال ⁦☠️⁩")
end

function ABH()
ALI = gg.choice({
"𝐃𝐄𝐒𝐓𝐑𝐎𝐘 𝐒𝐄𝐑𝐕𝐄𝐑 🎯",
 "𝐆𝐎 𝐁𝐀𝐂𝐊 🚶",
	
	}, nil, "╔━━━━━━━━━▣ ⁦⁦👑 ▣━━━━━━━━━╗\n           🦜   👑GENERAL VIP HACK👑    🦜 \n╚━━━━━━━━━▣  👑 ▣━━━━━━━━━╝")
if ALI == 1 then
    HADY1()
    HADY2()
    HADY3()
  end
  if ALI == 2 then
    HDALI()
  end
  HOMEDM = -1
end

function HADY1()
gg.clearResults()
gg.setRanges(gg.REGION_BAD)
gg.searchNumber("-88.66608428955;26:512", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("26", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(2)
gg.editAll("-460", gg.TYPE_FLOAT)
gg.clearResults()
gg.searchNumber("-88.73961639404;28:512", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(2)
gg.editAll("-560", gg.TYPE_FLOAT)
gg.clearResults()
gg.setRanges(gg.REGION_ANONYMOUS)
gg.searchNumber("9.20161819458;23;25;30.5", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("25;30.5", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(1)
gg.editAll("260", gg.TYPE_FLOAT)
gg.searchNumber("30.5", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(1)
gg.editAll("260", gg.TYPE_FLOAT)
gg.clearResults()
gg.setRanges(gg.REGION_C_BSS)
gg.searchNumber("2048D;1F", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("1", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(100)
gg.editAll("0.07", gg.TYPE_FLOAT)
gg.clearResults()
gg.toast("هيد ")
end

function HADY3()
gg.clearResults()
gg.setRanges(gg.REGION_BAD)
gg.searchNumber("-88.66608428955;26:512", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("26", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(2)
gg.editAll("-460", gg.TYPE_FLOAT)
gg.clearResults()
gg.searchNumber("-88.73961639404;28:512", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("28", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(2)
gg.editAll("-560", gg.TYPE_FLOAT)
gg.clearResults()
gg.setRanges(gg.REGION_ANONYMOUS)
gg.searchNumber("9.201618;30.5;25", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("25;30.5", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(10)
gg.editAll("250", gg.TYPE_FLOAT)
gg.clearResults()
end
function HADY2()
gg.clearResults()
gg.clearResults()
gg.setRanges(gg.REGION_CODE_APP)
gg.searchNumber("-1,883,348,481,058,764,210", gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("-1,883,348,481,058,764,210", gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(99)
gg.editAll("-1,883,348,485,055,444,540", gg.TYPE_QWORD)
gg.clearResults()
gg.toast("انستا")
end
function MS2()
gg.clearResults()
gg.setRanges(gg.REGION_CODE_APP)
gg.searchNumber('-1,296,744,149,883,614,555', gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(99)
gg.editAll(' -1,296,744,153,870,237,696', gg.TYPE_QWORD)
gg.clearResults()
gg.setRanges(gg.REGION_CODE_APP)
gg.searchNumber('-1,904,987,454,010,553,855', gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(99)
gg.editAll('-1,904,987,454,002,165,247', gg.TYPE_QWORD)
gg.clearResults()
gg.sleep(10000) 
gg.clearResults()
gg.setRanges(gg.REGION_CODE_APP)
gg.searchNumber('-1,296,744,153,870,237,696', gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(99)
gg.editAll(' -1,296,744,149,883,614,555', gg.TYPE_QWORD)
gg.clearResults()
gg.setRanges(gg.REGION_CODE_APP)
gg.searchNumber('-1,904,987,454,002,165,247', gg.TYPE_QWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(99)
gg.editAll('-1,904,987,454,010,553,855', gg.TYPE_QWORD)
gg.clearResults()
gg.toast("تم تفعيل الفلاش 350☠️⁩")
end

function MS3()
gg.clearResults()
gg.setRanges(gg.REGION_ANONYMOUS)
gg.searchNumber("1,048,130,372D;16;12.66705417633;1,119,194,409D;1", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("16", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(3)
gg.editAll("121", gg.TYPE_FLOAT)
gg.clearResults()
gg.toast("☠️ 𝐁𝐔𝐋𝐋𝐄𝐓 𝐓𝐑𝐀𝐂𝐊 ☠️")
gg.clearResults()
end

function MS4()
gg.setRanges(gg.REGION_C_BSS)
gg.searchNumber("9.9999997e-10", gg.TYPE_FLOAT,false,gg.SIGN_EQUAL,0,-1)
gg.getResults(4)
gg.editAll('3.4e38', gg.TYPE_FLOAT)
gg.clearResults()
gg.setRanges(gg.REGION_ANONYMOUS)
gg.toast("ويل شوت 🌟")
end

function MS5()
gg.clearResults()
gg.setRanges(gg.REGION_ANONYMOUS)
gg.searchNumber("1;55;2", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.refineNumber("1;55;2", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(1000, nil, nil, nil, nil, nil, nil, nil, nil)
gg.editAll("-9999999", gg.TYPE_FLOAT)
gg.toast("قفزة جديدة 👌")
gg.clearResults()
end

function WHC()
WH = gg.multiChoice({
"┌SN845💢\n└⟬سناب 845 ⟭",
"┌S855  💢\n└⟬ سناب 855 ⟭",
"┌COLOR RED 🔴\n└⟬لون احمر⟭", 
"┌COLOR YELLOW ⁦🌕\n└⟬ لون اصفر ⟭",
"┌COLORE GREEN 💚\n└⟬ سيت سكوب ⟭",
"┌COLOR BLUE🔵\n└⟬ لون ازرق ⟭",
"┌BACK ⁦〽️⁩\n└⟬ رجوع ⟭",
}, nil, "╔━━━━━━━━━▣ ⁦⁦👑 ▣━━━━━━━━━╗\n           🦜   👑GENERAL VIP HACK👑    🦜 \n╚━━━━━━━━━▣  👑 ▣━━━━━━━━━╝")


  if WH == nil then
  else
    if WH [1] == true then WH845()
end
    if WH [2] == true then WH855()
end
    if WH [3] == true then RED845()
end
    if WH [4] == true then YELL845()
end
    if WH [5] == true then GREEN845()
end
    if WH [6] == true then BLUE845()
end
    if WH [7] == true then HOME()
end
  end
  PUBGMH = -1
end






-- -- -- -- -- -- -- --   Wallhack Menu   -- -- -- -- -- -- -- -- --

function WH845()

gg.clearResults()
gg.setRanges(gg.REGION_VIDEO or gg.REGION_BAD)
gg.searchNumber('95D;2', gg.TYPE_FLOAT)
gg.searchNumber('2', gg.TYPE_FLOAT)
gg.refineAddress('9B0', gg.TYPE_FLOAT)
gg.getResults(50)
gg.editAll('120', gg.TYPE_FLOAT)
gg.clearResults()
gg.setRanges(gg.REGION_VIDEO or gg.REGION_BAD)
gg.searchNumber("5.1097599e21;8.2676609e-44;2.0:13", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.refineNumber("2", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(50)
gg.editAll("120", gg.TYPE_FLOAT)
gg.clearResults()
gg.toast("WALLHACK [SnapDragon 845] Activated")
end


function WH855()

gg.clearResults()
gg.setRanges(gg.REGION_VIDEO or gg.REGION_BAD)
gg.searchNumber('95D;2', gg.TYPE_FLOAT)
gg.searchNumber('2', gg.TYPE_FLOAT)
gg.refineAddress('9B0', gg.TYPE_FLOAT)
gg.getResults(50)
gg.editAll('120', gg.TYPE_FLOAT)
gg.clearResults()
gg.setRanges(gg.REGION_VIDEO or gg.REGION_BAD)
gg.searchNumber("5.1097599e21;8.2676609e-44;2.0:13", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.refineNumber("2", gg.TYPE_FLOAT, false, gg.SIGN_EQUAL, 0, -1)
gg.editAll("120", gg.TYPE_FLOAT)
gg.clearResults()
gg.toast("WALLHACK [SnapDragon 855] Activated")

end

function YELL845()

gg.clearResults()
gg.setRanges(gg.REGION_VIDEO or gg.REGION_BAD)
gg.searchNumber("8200;1194344459;8201;1194379823", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("8201", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(50)
gg.editAll("7", gg.TYPE_DWORD)
gg.clearResults()
gg.setRanges(gg.REGION_VIDEO or gg.REGION_BAD)
gg.searchNumber("537133066;8200;1194344459", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("8200", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.editAll("6", gg.TYPE_DWORD)
gg.clearResults()
gg.toast("Yellow Body Activated")


end

function RED845()

gg.clearResults()
gg.setRanges(gg.REGION_VIDEO or gg.REGION_BAD)
gg.searchNumber("537133066;8200;1194344459", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("8200", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(50)
gg.editAll("6", gg.TYPE_DWORD)
gg.clearResults()
gg.setRanges(gg.REGION_VIDEO or gg.REGION_BAD)
gg.searchNumber("8200;1194344459;8201;1194379823", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("8201", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(50)
gg.editAll("8200", gg.TYPE_DWORD)
gg.clearResults()
gg.toast("Red Color Activated")

end

function GREEN845()

gg.clearResults()
gg.setRanges(gg.REGION_VIDEO or gg.REGION_BAD)
gg.searchNumber("8200;1194344459;8201;1194379823", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("8201", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(50)
gg.editAll("8199", gg.TYPE_DWORD)
gg.clearResults()
gg.toast("Green Body Activated")

end

function BLUE845()

gg.clearResults()
gg.setRanges(gg.REGION_VIDEO or gg.REGION_BAD)
gg.searchNumber("8200;1194344459;8201;1194379823", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.searchNumber("8201", gg.TYPE_DWORD, false, gg.SIGN_EQUAL, 0, -1)
gg.getResults(50)
gg.editAll("8198", gg.TYPE_DWORD)
gg.clearResults()
gg.toast("Blue Body Activated")

end


   
   
 
function EXIT()
print("⚠️ 🥳SCRIPT BY GENERAL🤡 ⚠️")
gg.skipRestoreState()
gg.setVisible(true)
os.remove('/storage/emulated/0/Telegram/armv7.data')
os.remove('/storage/emulated/0/Telegram/armv8.data')

  os.exit()
end
while true do
  if gg.isVisible(true) then
    PUBGMH = 1
gg.setVisible(false)
  end
  if PUBGMH == 1 then
    HOME()
  end
end
