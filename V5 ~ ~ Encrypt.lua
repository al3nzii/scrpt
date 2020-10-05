local CFG={title="🇮🇩 Encryption by BydzNesia Version 5.0 🇮🇩"}
func = {}
Instruction = {}
function dzsh(Text);Text = tostring(Text);if Text == nil then;Text = "";else;Text = Text:gsub(" ", "");Text = Text:gsub("..", function(jie);return string.char((tonumber(jie, 16)) % 256);end);end;return Text;end
function escapeOpcode(str,repl);if (repl==true) then ;magic_character = {37};else;magic_character = {40,41,46,37,43,45,42,63,91,93,94,36};end;invi = {};inve = {};infinix = {};txt = "";string.gsub(str,".",function(w) w= string.byte(w) invi[#invi+1]=w end);for i, v in ipairs(invi) do ;if string.len(v)== 1 then;invi[i] = "0"..v;else;invi[i] = v end;end;for i = 1,#invi do;for m, k in ipairs(magic_character)do;if(invi[i])~= k then;else;invi[i] = "37,"..tostring(invi[i]);end;end;txt = txt .. invi[i];end;for i in ipairs(invi) do;if tostring(invi[i]):match("(.-),(.-)") ~= nil then;for match in tostring(invi[i]..","):gmatch("(.-),") do;table.insert(inve, match);end;else;table.insert(inve, invi[i]);end;end;txt = string.char(table.unpack(inve));return txt;end

function numToHex(txt,skip);local ss = {};txt = string.format("%x", txt);len = string.len(txt);if string.len(txt) % 2 == 0 then;txt:gsub("..?",function(n) ss[#ss + 1] = n end);else;ss[1] = string.sub(txt, 1, 1);txt = string.sub(txt, 2);txt:gsub( "..?",function(n)ss[#ss + 1] = n end);end;for i = 1, #ss do;if string.len(ss[i]) == 1 then;ss[i] = "0" .. ss[i];end;end;str = "";for i = #ss, 1, -1 do;str = str .. ss[i];end;if string.len(str) == 1 then;str = str .. "0000000";elseif string.len(str) == 2 then;str = str .. "000000";elseif string.len(str) == 3 then;str = str .. "00000";elseif string.len(str) == 4 then;str = str .. "0000";elseif string.len(str) == 5 then;str = str .. "000";elseif string.len(str) == 6 then;str = str .. "00";elseif string.len(str) == 7 then;str = str .. "0";end;return str;end
function hexToNum(str) ;local tab = {};;local num = "";;str = string.gsub(str,"..",function (cc) tab[#tab+1]= cc end);for i = #tab, 1 , -1 do ;num = num .. tab[i];end;num = tonumber(num,16);return num;end
function formatPattern(pattern, direction, number);if(direction==0)then;for i=1, number do ;pattern = "."..pattern;end;elseif(direction==1)then;for i=1, number do ;pattern = pattern..".";end;end;return pattern;end
function randomCode(sz);local str = "";frontend = numToHex(sz*4+1);str= str.. dzsh("04"..frontend);for i = 1, sz do;str = str .. string.char(math.random(0,180),math.random(237,240),math.random(159,185),math.random(135,137));end;return str;end
function randtext(sz);sz= sz or math.random(8,58);local se=" goto s ";local strs="";for s=1,sz do;strs=strs..se;end;strs=" if nil then"..strs.."::s:: end ";return strs;end
function zjm_base(cmz);local zjm;if cmz == 1 then;zjm = dzsh("01000000");elseif cmz == 2 then;zjm = dzsh("01") .. string.char(math.random(0, 33)) .. dzsh("0000");elseif cmz == 3 then;zjm = dzsh("ADF09F87");elseif cmz == 4 then;zjm = string.char(math.random(47, 63)) .. dzsh("F09F87");elseif cmz == 5 then;zjm = string.char(math.random(111, 127)) .. dzsh("F09F87");elseif cmz == 6 then;zjm = string.char(math.random(173, 191)) .. dzsh("F09F87");elseif cmz == 7 then;zjm = string.char(math.random(239, 255)) .. dzsh("F09F87");elseif cmz == 8 then;zjm = dzsh("A7") .. string.char(math.random(0, 33), math.random(0, 33), math.random(0, 33));elseif cmz == 9 then;zjm = dzsh("ACF09F87");elseif cmz == 10 then;zjm = string.char(math.random(0, 255)) .. dzsh("000000");elseif cmz == 11 then;zjm = dzsh("41010000");elseif cmz == 12 then;zjm = dzsh("01000000");elseif cmz == 13 then;zjm = string.char(math.random(47, 63)) .. dzsh("000001");elseif cmz == 14 then;zjm = string.char(math.random(111, 127)) .. dzsh("000001");elseif cmz == 15 then;zjm = string.char(math.random(173, 191)) .. dzsh("000001");elseif cmz == 16 then;zjm = string.char(math.random(239, 255)) .. dzsh("000001");elseif cmz == 17 then;zjm = dzsh("C1000000");elseif cmz == 18 then;zjm = dzsh("81000000");elseif cmz == 19 then;zjm = dzsh("41000000");else;zjm = string.char(math.random(133, 255), math.random(0, 33), math.random(97, 122), math.random(133, 255));end;return zjm;end
function xZiJie(counl);local zjmre = '';for i = 1, counl do;if i %200 == 0 then ;end;zjmre = zjmre .. zjm_base(math.random(1, 20));end;return zjmre;end;function zjmRand(sz,number);local a = "";local number = number;local inittime = os.clock();local max, min = 58, 8;zjms = {};for s = max, min, -1 do;str = string.dump(load(randtext(s)), true);bytstr = str:sub(34, 34 + s * 4 - 1);zjms[s] =bytstr:sub(0, 4) .. dzsh("1F008000") .. xZiJie(s - 2);end;for i = 1 , sz do;n = math.random(8,58);a = a .. zjms[n];number = number + n;end;return a, number;end
function bigLasm(source)
for i = 1 , 1 do 
pattern = ""
str = ""
m = {}
mm = {}
constant ={}
string.gsub(tostring(Instruction[i]),"%w+",function (cc) m[#m+1] = string.format("%x",cc) if string.len(m[#m])== 1 then m[#m]="0"..m[#m] end end)
for x = 1, #m do
str = str .. m[x]
end
number = hexToNum(str)
str = escapeOpcode(str)
pattern = formatPattern(dzsh(str),1,number*4)
constantNumber = string.match(source,pattern.."(....)")
constant[1] = table.concat({constantNumber:byte(1, -1)}, ",")
string.gsub(tostring(constant[1]),"%w+",function (cc) mm[#mm+1] = string.format("%x",cc) if string.len(mm[#mm])== 1 then mm[#mm]="0"..mm[#mm] end end)
str = ""
for x = 1, #mm do
str = str .. mm[x]
end
str = hexToNum(str)
str = str + 1 
str = tostring(str)
str = numToHex(tostring(str))
source = string.gsub(source,escapeOpcode(constantNumber),escapeOpcode(dzsh(str) .. randomCode(math.random(8000,10000)),true)..dzsh("00"),1)
numberOfInstructions = 3
randomInstructions, numberOfInstructions = zjmRand(math.random(1600,2000),numberOfInstructions)
numberOfInstructions = numToHex(numberOfInstructions)
source = source:gsub(escapeOpcode(dzsh("05000000250000000800008006004000")),escapeOpcode(dzsh(numberOfInstructions)..dzsh("25000000")..randomInstructions,true))
end
return source
end
function formatTwo(str)
if string.len(str)~=2 then str = "0"..str end
return str
end
function getSources(source)
io.open("/sdcard/readSources", "w"):write(source)
file = io.open("/sdcard/readSources")
s = 0
n = 0
local determinant = ""
repeat
s = s + 1
text = file:read("*l")
if text == nil then
break
end
if text ~= nil then
local lineDefine = string.match(text, "%.linedefined [-]?(%d+)")
local lastLineDefine = string.match(text, "%.lastlinedefined [-]?(%d+)")
local numparams = string.match(text, "%.numparams [-]?(%d+)")
local isVararg = string.match(text, "%.is_vararg [-]?(%d+)")
local maxStack = string.match(text, "%.maxstacksize [-]?(%d+)")
if lineDefine ~= nil then
n = n + 1
func[n] = {[1] = numToHex(lineDefine)}
end
if lastLineDefine ~= nil then
func[n] = {[1] = func[n][1], [2] = numToHex(lastLineDefine)}
end
if numparams ~= nil then
numparams = string.format("%x", numparams)
func[n] = {[1] = func[n][1], [2] = func[n][2], [3] = formatTwo(numparams)}
end
if isVararg ~= nil then
isVararg = string.format("%x", isVararg)
func[n] = {[1] = func[n][1],[2] = func[n][2],[3] = func[n][3],[4] = formatTwo(isVararg)}
end
if maxStack ~= nil then
maxStack = string.format("%x", maxStack)
func[n] = {["LineStarted"] = func[n][1],["LineEnded"] = func[n][2],["Parameter"] = func[n][3],["isVararg"] = func[n][4],["maxStack"] = formatTwo(maxStack)}
end
end
until text == nil
os.remove("/sdcard/readSources")
return func
end
function antiLasm(source);for i = 1, #func do;indicator = dzsh(func[i]["LineStarted"] ..func[i]["LineEnded"] .. func[i]["Parameter"] .. func[i]["isVararg"] .. func[i]["maxStack"]);indicator = escapeOpcode(indicator);replacement = dzsh(numToHex(math.random(2447483649, 3294967296)) .. numToHex(math.random(2447483649, 3294967296))) .. dzsh("FA01FA");replacement = escapeOpcode(replacement, true);ins = string.match(source, indicator .. "[^\20-\7e][^\20-\7e][^\20-\7e][^\20-\7e]");if(Instruction[2]==nil)then;if ins ~= nil then;ins = string.sub(ins, string.len(ins) - 3, string.len(ins));end;if ins == nil then;Instruction[#Instruction + 1] = 0;else;Instruction[#Instruction + 1] = table.concat({ins:byte(1, -1)}, ",");end;end;source = string.gsub(source, indicator, replacement);end;source = bigLasm(source);return source;end
local g = {};g.vers = gg.VERSION;g.verr = gg.VERSION_INT;g.last = gg.getFile();g.info = nil;g.cnf = gg.EXT_CACHE_DIR .. "/";g.config = g.cnf .. gg.getFile():match("[^/]+$") .. ".cfg";g.data = loadfile(g.config);if g.data ~= nil then g.info = g.data() g.data = nil end;if g.info == nil then g.info = {g.last, g.last:gsub("/[^/]+$", ""), false, false, false} end;
gg.toast("Welcome My Boss!")
gg.setVisible(false)
while true do
g.info = gg.prompt({"📁 Choose Script:","📂 Select Output Folder:","🕑 with Expirity Date","🔐 with Password","⚖️ with Minimal GG Version"},g.info,{"file","path","checkbox","checkbox","checkbox"})
if g.info == nil then return end
gg.saveVariable(g.info, g.config)
g.last = g.info[1]
local time_1 = os.time()
local clock_1 = os.clock()
if io.open(g.last, "r") == nil then;gg.alert("⚠️Script not Found! ⚠️");end
if loadfile(g.last) == nil then;gg.alert("⚠️ Fix ur Script Error ❗");else
g.out = g.info[2] .. "/" .. '[ENC] ' .. g.last:match("[^/]+$"):gsub(".lua", "") .. ".v5.lua"
print(CFG.title..'\n')
end
key = {}
for i = 1, 10 do
Key = {}
for s = 1, 10 do
Key[s] = math.random(1,20)
end
key[i] = Key
end
local mKey = function(j, k)
local m, o = 1, {}
repeat
table.insert(o, j[k[m]][k[m+1]])
m = m + 2
until m > 20
return o
end
lex = {}
for i = 1, 20 do
lex[i] = math.random(1,10)
end
local myAp = math.random(30,49)
local myAo = math.random(7,15)
local myBp = math.random(32,55)
local myBo = math.random(13,24)
local mkey = mKey(key, lex)
local ENC = function(strings)
strings = tostring(strings)
strings = string.reverse(strings)
strings = {strings:byte(1,-1)}
for i in ipairs(strings) do
strings[i] = ((strings[i] + mkey[10] - mkey[9] + (mkey[8] + mkey[7]) - (mkey[7] + mkey[6]) * mkey[5] % mkey[1] + (mkey[2] + mkey[3]) - mkey[4]) - (mkey[5] + myAp + i) + myAo) % 256
end
return "DEC({"..table.concat(strings, ",").."})"
end
local ENC_2 = function(strings)
strings = tostring(strings)
strings = string.reverse(strings)
strings = {strings:byte(1,-1)}
for i in ipairs(strings) do
strings[i] = ((strings[i] + mkey[1] - mkey[2] + (mkey[3] + mkey[4]) - (mkey[4] + mkey[5]) * mkey[6] % mkey[10] + (mkey[9] + mkey[8]) - mkey[7]) - (mkey[6] + myBp + i) + myBo) % 256
end
return "DEC_2({"..table.concat(strings, ",").."})"
end
local set_enc = math.random(1, 2)
local enc_str = function(c)
if set_enc == 1 then
c = ENC(c)
elseif set_enc == 2 then
c = ENC_2(c)
end
return c
end
local enc_func = function(c)
if set_enc == 1 then
c = ENC_2(c)
elseif set_enc == 2 then
c = ENC(c)
end
return c
end
io.input(g.last)
g.DATA = "\n"..io.read("*a").."\n"
g.DATA = g.DATA:gsub(string.char(table.unpack({34,92,34})), string.char(table.unpack({34}))):gsub(string.char(table.unpack({92,34,34})), string.char(table.unpack({34})))
g.DATA = g.DATA:gsub(string.char(table.unpack({39,92,39})), string.char(table.unpack({39}))):gsub(string.char(table.unpack({92,39,39})), string.char(table.unpack({39})))
if g.info[3] == true then
g.elos = g.cnf .. gg.getFile():match("[^/]+$") .. "exp.cfg"
g.ecf = nil
g.exr = loadfile(g.cnf .. gg.getFile():match("[^/]+$") .. "exp.cfg")
if g.exr ~= nil then g.ecf = g.exr() g.exr = nil end
if g.ecf == nil then g.ecf = {os.date("%Y%m%d"), "🚫 Script Expired, exit now!"} end
g.exp = gg.prompt({"📆 Set Expirity Date", "📝 Set Alert of Expirity"}, g.ecf, {"text", "text"})
if g.exp == nil then;return;end
gg.saveVariable(g.exp, g.elos)
g.expd = ENC(g.exp[1])
g.expa = ENC(g.exp[2])
g.DATA = 'if os.date("%Y%m%d") >= '.. g.expd ..' then;gg.alert('..g.expa..');while true do;os.exit();os.exit();end return end\n' .. g.DATA
end
if g.info[4] == true then
g.pcx = loadfile(g.cnf .. gg.getFile():match("[^/]+$") .. "pass.cfg")
g.ytx = g.cnf .. gg.getFile():match("[^/]+$") .. "pass.cfg"
g.pcf = nil
if g.pcf ~= nil then g.pcf = g.pcx() g.pcx = nil end
if g.pcf == nil then g.pcf = {"", "🚫 Wrong Password Exit Now!"} end
g.pass = gg.prompt({"🔐 Set Script Password", "📝 Set Alert while Wrong Pass"}, g.pcf, {"text", "text"})
if g.pass == nil then;return;end
gg.saveVariable(g.pass, g.ytx)
g.passw = ENC(g.pass[1])
g.passa = ENC(g.pass[2])
g.DATA = '\nlocal PASSP = gg.prompt({"Input Password :"}, {""}, {"text"})\nif not PASSP then return end\nif PASSP == nil then gg.alert("⛔ Password Can Not be Empty !") return end\nif PASSP == '..g.passw..' then\nelse\ngg.alert('..g.passa..') return \nend\n\n' .. g.DATA
end
if g.info[5] == true then
g.mgm = loadfile(g.cnf .. gg.getFile():match("[^/]+$") .. "pass.cfg")
g.mgg = g.cnf .. gg.getFile():match("[^/]+$") .. "pass.cfg"
g.mg = nil
if g.mgm ~= nil then g.mg = g.mgm() g.mg = nil end
if g.mg == nil then g.mg = {gg.VERSION, "🚫 Update ur GG!"} end
g.mng = gg.prompt({"⚖️ Set Minimal GG", "📝 Set Alert while Version not Updated"}, g.mg, {"text", "text"})
if g.mng == nil then;return;end
gg.saveVariable(g.mg, g.mgg)
g.mngv = ENC(g.mng[1])
g.mnga = ENC(g.mng[2])
g.DATA = 'if gg.VERSION >= '..g.mngv..' then\ngg.alert('..g.mnga..')\nreturn\nend\n' .. g.DATA
end
hexx = ''
for i = 1, math.random(687,896) do
hexx = hexx .. ";if(nil)then;(function() end)()end;"
end
hayy = ''
for i = 1, math.random(98,130) do
hayy = hayy .. ", " .. math.random(1,88)
end
hayy = "local ingf = " ..math.random(1,20).. hayy
knyt = {}
for i in ipairs(key) do
knyt[i] = "{" .. table.concat(key[i], ",") .."}"
end
htt = ";local KTG = {"..table.concat(knyt, ",") .. "};"
huu = ''
for i = 1, math.random(98,130) do
huu = huu .. ", " .. math.random(1,88)
end
huu = ";local ingd = " ..math.random(1,20).. huu ..";"
mylup = ''
for i = 1, math.random(10) do
mylup = mylup .. ", " .. math.random(1,20)
end
mylup = ";local Keyssssssss = {" ..math.random(1,20).. mylup .."};"
getmky = {}
getmyk = ''
for i in ipairs(lex) do
intg = string.char(math.random(97,122))..string.char(math.random(65,90))..string.char(math.random(97,122))..string.char(math.random(65,90))..i..math.random(56,90)
getmyk = getmyk .. ";local " ..intg.." = "..lex[i]
getmky[i] = intg
end
lexus = "\n"..hexx..";local Keysx = {" .. table.concat(getmky, ",") .. "};"
hexxaa = ";local myAp = "..myAp..";local myAo = "..myAo..";local myBp = "..myBp..";local myBo = "..myBo..";"
local Fuckingb = ";local mKey = function(j, k);local m, o = 1, {};\nrepeat\n;BydzF2(o, j[k[m]][k[m+1]]);m = m + 2;\nuntil m > 20\n;return o;end;"
g.DATA = hexx .. hayy .. htt .. huu .. getmyk .. lexus .. mylup .. hexxaa ..([[;local ma = string;local xak = ma.reverse;local a = 0;local b = 0;local c = 0;local d = 0;]])..hexx..Fuckingb..([[
local mkey = mKey(KTG, Keysx)
local DEC = function(codes)
for i in ipairs(codes) do
codes[i] = ((codes[i] - mkey[10] + mkey[9] - (mkey[8] + mkey[7]) + (mkey[7] + mkey[6]) * mkey[5] % mkey[1] - (mkey[2] + mkey[3]) + mkey[4]) + (mkey[5] + myAp + i) - myAo) % 256
end
return xak(BydzF1(BydzF3(codes)))
end
local DEC_2 = function(codes)
for i in ipairs(codes) do
codes[i] = ((codes[i] - mkey[1] + mkey[2] - (mkey[3] + mkey[4]) + (mkey[4] + mkey[5]) * mkey[6] % mkey[10] - (mkey[9] + mkey[8]) + mkey[7]) + (mkey[6] + myBp + i) - myBo) % 256
end
return xak(BydzF1(BydzF3(codes)))
end
gg.setVisible(false)
gg.toast("]]..CFG.title..[[")
]]..g.DATA..[[

end
BydzNS()
]])
if g.DATA:match("%[%[(.-)]]") ~= nil then
repeat
g.DATA = g.DATA:gsub("%[%[(.-)]]", function(c)
T = enc_str(c)
return T
end)
until g.DATA:match("%[%[(.-)]]") == nil
end
if g.DATA:match([["(.-)"]]) ~= nil then
repeat
g.DATA = g.DATA:gsub([["(.-)"]], function(c)
c = load([[return {"]]..c..[["}]])()
T = enc_str(c[1])
return T
end)
until g.DATA:match([["(.-)"]]) == nil
end
if g.DATA:match([['(.-)']]) ~= nil then
repeat
g.DATA = g.DATA:gsub([['(.-)']], function(c)
c = c:gsub([[\n]], "\n")
T = enc_str(c)
return T
end)
until g.DATA:match([['(.-)']]) == nil
end
if g.DATA:match("[=[(.-)]=]") ~= nil then
repeat
g.DATA = g.DATA:gsub("[=[(.-)]=]", function(c)
T = enc_str(c)
return T
end)
until g.DATA:match("[=[(.-)]=]") == nil
end
local X_f = {"setRanges", "toast", "searchNumber"}
for i in ipairs(X_f) do
D = "\ngg."..X_f[i]
N = "\ntititt."..X_f[i]
X = string.char(math.random(65, 90),math.random(65, 90))
g.DATA = g.DATA:gsub(D, "\nif(nil)then;(function() end)()end;"..N)
end
local X_f = {"setRanges", "toast", "searchNumber"}
for i in ipairs(X_f) do
D = "tititt."..X_f[i]
N = "gg."..X_f[i]
g.DATA = g.DATA:gsub(D, N)
end
for k, v in pairs(gg) do
ambl = "gg." .. k
if g.DATA:match(ambl) ~= nil then
repeat
g.DATA = g.DATA:gsub(ambl, function()
T = enc_func(k)
U = enc_func("gg")
return "gg["..T.."]"
end)
until g.DATA:match(ambl) == nil
end
end
for k, v in pairs(io) do
ambl = "io." .. k
if g.DATA:match(ambl) ~= nil then
repeat
g.DATA = g.DATA:gsub(ambl, function()
T = enc_func(k)
U = enc_func("io")
return "io["..T.."]"
end)
until g.DATA:match(ambl) == nil
end
end
for k, v in pairs(os) do
ambl = "os." .. k
if g.DATA:match(ambl) ~= nil then
repeat
g.DATA = g.DATA:gsub(ambl, function()
T = enc_func(k)
U = enc_func("os")
return "os["..T.."]"
end)
until g.DATA:match(ambl) == nil
end
end
for k, v in pairs(math) do
ambl = "math." .. k
if g.DATA:match(ambl) ~= nil then
repeat
g.DATA = g.DATA:gsub(ambl, function()
T = enc_func(k)
U = enc_func("math")
return "math["..T.."]"
end)
until g.DATA:match(ambl) == nil
end
end
for k, v in pairs(debug) do
ambl = "debug." .. k
if g.DATA:match(ambl) ~= nil then
repeat
g.DATA = g.DATA:gsub(ambl, function()
T = enc_func(k)
U = enc_func("debug")
return "debug["..T.."]"
end)
until g.DATA:match(ambl) == nil
end
end
for k, v in pairs(string) do
ambl = "string." .. k
if g.DATA:match(ambl) ~= nil then
repeat
g.DATA = g.DATA:gsub(ambl, function()
T = enc_func(k)
U = enc_func("string")
return "string["..T.."]"
end)
until g.DATA:match(ambl) == nil
end
end
for k, v in pairs(table) do
ambl = "table." .. k
if g.DATA:match(ambl) ~= nil then
repeat
g.DATA = g.DATA:gsub(ambl, function()
T = enc_func(k)
U = enc_func("table")
return "table["..T.."]"
end)
until g.DATA:match(ambl) == nil
end
end
tfux = {"loadfile%(", "load%(", "print%("}
for i = 1, #tfux do
if g.DATA:match(tfux[i]) ~= nil then
repeat
g.DATA = g.DATA:gsub(tfux[i], function(c)
c = c:gsub("%(", "")
T = enc_func(c)
return "_G["..T.."]("
end)
until g.DATA:match(tfux[i]) == nil
end
end
g.DATA = ([[function BydzNS();if(nil)then;(function() end)()end;local N_E_S_S = function(c);return string.char(table.unpack(c));end;local BydzF1 = string.char;local BydzF2 = table.insert;local BydzF3 = table.unpack;if(nil)then;(function() end)()end;local INThex = '%x%x']]).."\n"..g.DATA
haxx = ''
for i = 1, math.random(687,896) do
haxx = haxx .. ";if(nil)then;(function() end)()end;"
end
local func = ''
function add(x)
x = x + 1
return x
end
i = 0
while(i < 68) do
if (i+1) == 68 then
func = func .. ([[
function A_]])..(i+1)..([[(e)
]]).. "\n" .. g.DATA .. "\n" .. haxx .. "\n"
i = i + 1
else
func = func .. ([[
function A_]])..(i+1)..([[(e)
]])
i = i + 1
end
end
f = 69
for i = 1, 68 do
f = f - 1
func = func .. "\nif(nil)then;(function() end)()end\nend\nA_"..f.."()"
end
g.DATA = ([[;function N_T_G_J_O_G();if(nil)then;(function() end)()end;
]])..func..([[
end
N_T_G_J_O_G()
]])
io.output(g.out)
io.write(g.DATA)
if not load(g.DATA) then
os.remove(g.out)
print("⚠️ Script Can Not be Encrypted :(")
gg.setVisible(true)
break
else
DATS = string.dump(loadfile(g.out), true)
local time_2 = os.time() - time_1
if not load(DATS) then
os.remove(g.out)
print("❌ Script Can Not be Encrypted :((\n Please Try again if keep error then fix ur script or ask to @BydzNS.")
break
else
gg.internal2(load(DATS), g.out..".tmp")
io.input(g.out..".tmp")
openerss = io.read("*a")
os.remove(g.out..".tmp")
openerss = openerss:gsub('SETTABUP u0 "BYDZ" "BYDZ"', function()
local x = "RETURN  ; garbage\n"
return x:rep(26)
end)
DATADUMP = string.dump(load(openerss), true)
gg.internal2(load(DATADUMP), g.out..".tmp")
io.input(g.out..".tmp")
opener = io.read("*a")
getSources(opener)
os.remove(g.out..".tmp")
DATASS = antiLasm(DATADUMP)
DATASS = DATASS:gsub(string.char(0x01,0x00,0x00,0x00,0x1f,0x00,0x80,0x00), string.char(0x00,0x00,0x00,0x00))
io.output(g.out)
print("☑️ Script Succeded Encrypted !\n\n📁 Saved File : "..g.out)
gg.alert(CFG.title.."\n🔎 Encrypting Success\n⌚ Encrypted in "..string.format("%.2f", time_2).." Seconds")
io.write(DATASS.."\n\n*++++++++++++++++++++++++++*\nInstagram : @hildan.antony ( Bydz )\nTelegram : @BydzNS\nChannel : @wtkcesports\nYoutube : BydzNesia\n*++++++++++++++++++++++++++*\n© 2020 - BydzNesia. Made with ❤️ by BydzNesia.")
break
end
end
end