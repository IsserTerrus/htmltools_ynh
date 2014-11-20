function _a1(a, b) {
	this.count = a, this._fc = b, this.__defineGetter__("Count", function () {
		return this.count
	}), this.__defineGetter__("_dm", function () {
		return this._fc
	})
}
function _a2(a, b, c) {
	this._bm = a, this._do = c ? Array(b, c) : Array(b), this.__defineGetter__("_bo", function () {
		return this._bm
	}), this.__defineGetter__("_dn", function () {
		return this._bm * this._fo
	}), this.__defineGetter__("_fo", function () {
		for (var a = 0, b = 0; this._do.length > b; b++) a += this._do[b].length;
		return a
	}), this._fb = function () {
		return this._do
	}
}
function _a3(a, b, c, d, e, f) {
	this._bs = a, this._ar = b, this._do = Array(c, d, e, f);
	for (var g = 0, h = c._bo, i = c._fb(), j = 0; i.length > j; j++) {
		var k = i[j];
		g += k.Count * (k._dm + h)
	}
	this._br = g, this.__defineGetter__("_fd", function () {
		return this._bs
	}), this.__defineGetter__("_as", function () {
		return this._ar
	}), this.__defineGetter__("_dp", function () {
		return this._br
	}), this.__defineGetter__("_cr", function () {
		return 17 + 4 * this._bs
	}), this._aq = function () {
		var a = this._cr,
			b = new _ac(a);
		b._bq(0, 0, 9, 9), b._bq(a - 8, 0, 8, 9), b._bq(0, a - 8, 9, 8);
		for (var c = this._ar.length, d = 0; c > d; d++) for (var e = this._ar[d] - 2, f = 0; c > f; f++) 0 == d && (0 == f || f == c - 1) || d == c - 1 && 0 == f || b._bq(this._ar[f] - 2, e, 5, 5);
		return b._bq(6, 9, 1, a - 17), b._bq(9, 6, a - 17, 1), this._bs > 6 && (b._bq(a - 11, 0, 3, 6), b._bq(0, a - 11, 6, 3)), b
	}, this._bu = function (a) {
		return this._do[a.ordinal()]
	}
}
function _ay() {
	return Array(new _a3(1, Array(), new _a2(7, new _a1(1, 19)), new _a2(10, new _a1(1, 16)), new _a2(13, new _a1(1, 13)), new _a2(17, new _a1(1, 9))), new _a3(2, Array(6, 18), new _a2(10, new _a1(1, 34)), new _a2(16, new _a1(1, 28)), new _a2(22, new _a1(1, 22)), new _a2(28, new _a1(1, 16))), new _a3(3, Array(6, 22), new _a2(15, new _a1(1, 55)), new _a2(26, new _a1(1, 44)), new _a2(18, new _a1(2, 17)), new _a2(22, new _a1(2, 13))), new _a3(4, Array(6, 26), new _a2(20, new _a1(1, 80)), new _a2(18, new _a1(2, 32)), new _a2(26, new _a1(2, 24)), new _a2(16, new _a1(4, 9))), new _a3(5, Array(6, 30), new _a2(26, new _a1(1, 108)), new _a2(24, new _a1(2, 43)), new _a2(18, new _a1(2, 15), new _a1(2, 16)), new _a2(22, new _a1(2, 11), new _a1(2, 12))), new _a3(6, Array(6, 34),
 new _a2(18, new _a1(2, 68)), new _a2(16, new _a1(4, 27)), new _a2(24, new _a1(4, 19)), new _a2(28, new _a1(4, 15))), new _a3(7, Array(6, 22, 38), new _a2(20, new _a1(2, 78)), new _a2(18, new _a1(4, 31)), new _a2(18, new _a1(2, 14), new _a1(4, 15)), new _a2(26, new _a1(4, 13), new _a1(1, 14))), new _a3(8, Array(6, 24, 42), new _a2(24, new _a1(2, 97)), new _a2(22, new _a1(2, 38), new _a1(2, 39)), new _a2(22, new _a1(4, 18), new _a1(2, 19)), new _a2(26, new _a1(4, 14), new _a1(2, 15))), new _a3(9, Array(6, 26, 46), new _a2(30, new _a1(2, 116)), new _a2(22, new _a1(3, 36), new _a1(2, 37)),
 new _a2(20, new _a1(4, 16), new _a1(4, 17)), new _a2(24, new _a1(4, 12), new _a1(4, 13))), new _a3(10, Array(6, 28, 50), new _a2(18, new _a1(2, 68), new _a1(2, 69)), new _a2(26, new _a1(4, 43), new _a1(1, 44)), new _a2(24, new _a1(6, 19), new _a1(2, 20)), new _a2(28, new _a1(6, 15), new _a1(2, 16))), new _a3(11, Array(6, 30, 54), new _a2(20, new _a1(4, 81)), new _a2(30, new _a1(1, 50), new _a1(4, 51)), new _a2(28, new _a1(4, 22), new _a1(4, 23)), new _a2(24, new _a1(3, 12), new _a1(8, 13))), new _a3(12, Array(6, 32, 58), new _a2(24, new _a1(2, 92), new _a1(2, 93)), new _a2(22, new _a1(6, 36),
 new _a1(2, 37)), new _a2(26, new _a1(4, 20), new _a1(6, 21)), new _a2(28, new _a1(7, 14), new _a1(4, 15))), new _a3(13, Array(6, 34, 62), new _a2(26, new _a1(4, 107)), new _a2(22, new _a1(8, 37), new _a1(1, 38)), new _a2(24, new _a1(8, 20), new _a1(4, 21)), new _a2(22, new _a1(12, 11), new _a1(4, 12))), new _a3(14, Array(6, 26, 46, 66), new _a2(30, new _a1(3, 115), new _a1(1, 116)), new _a2(24, new _a1(4, 40), new _a1(5, 41)), new _a2(20, new _a1(11, 16), new _a1(5, 17)), new _a2(24, new _a1(11, 12), new _a1(5, 13))), new _a3(15, Array(6, 26, 48, 70), new _a2(22, new _a1(5, 87), new _a1(1, 88)),
 new _a2(24, new _a1(5, 41), new _a1(5, 42)), new _a2(30, new _a1(5, 24), new _a1(7, 25)), new _a2(24, new _a1(11, 12), new _a1(7, 13))), new _a3(16, Array(6, 26, 50, 74), new _a2(24, new _a1(5, 98), new _a1(1, 99)), new _a2(28, new _a1(7, 45), new _a1(3, 46)), new _a2(24, new _a1(15, 19), new _a1(2, 20)), new _a2(30, new _a1(3, 15), new _a1(13, 16))), new _a3(17, Array(6, 30, 54, 78), new _a2(28, new _a1(1, 107), new _a1(5, 108)), new _a2(28, new _a1(10, 46), new _a1(1, 47)), new _a2(28, new _a1(1, 22), new _a1(15, 23)), new _a2(28, new _a1(2, 14), new _a1(17, 15))), new _a3(18, Array(6, 30, 56, 82),
 new _a2(30, new _a1(5, 120), new _a1(1, 121)), new _a2(26, new _a1(9, 43), new _a1(4, 44)), new _a2(28, new _a1(17, 22), new _a1(1, 23)), new _a2(28, new _a1(2, 14), new _a1(19, 15))), new _a3(19, Array(6, 30, 58, 86), new _a2(28, new _a1(3, 113), new _a1(4, 114)), new _a2(26, new _a1(3, 44), new _a1(11, 45)), new _a2(26, new _a1(17, 21), new _a1(4, 22)), new _a2(26, new _a1(9, 13), new _a1(16, 14))), new _a3(20, Array(6, 34, 62, 90), new _a2(28, new _a1(3, 107), new _a1(5, 108)), new _a2(26, new _a1(3, 41), new _a1(13, 42)), new _a2(30, new _a1(15, 24), new _a1(5, 25)), new _a2(28, new _a1(15, 15),
 new _a1(10, 16))), new _a3(21, Array(6, 28, 50, 72, 94), new _a2(28, new _a1(4, 116), new _a1(4, 117)), new _a2(26, new _a1(17, 42)), new _a2(28, new _a1(17, 22), new _a1(6, 23)), new _a2(30, new _a1(19, 16), new _a1(6, 17))), new _a3(22, Array(6, 26, 50, 74, 98), new _a2(28, new _a1(2, 111), new _a1(7, 112)), new _a2(28, new _a1(17, 46)), new _a2(30, new _a1(7, 24), new _a1(16, 25)), new _a2(24, new _a1(34, 13))), new _a3(23, Array(6, 30, 54, 74, 102),
 new _a2(30, new _a1(4, 121), new _a1(5, 122)), new _a2(28, new _a1(4, 47), new _a1(14, 48)), new _a2(30, new _a1(11, 24), new _a1(14, 25)), new _a2(30, new _a1(16, 15), new _a1(14, 16))), new _a3(24, Array(6, 28, 54, 80, 106), new _a2(30, new _a1(6, 117), new _a1(4, 118)), new _a2(28, new _a1(6, 45), new _a1(14, 46)), new _a2(30, new _a1(11, 24), new _a1(16, 25)), new _a2(30, new _a1(30, 16), new _a1(2, 17))), new _a3(25, Array(6, 32, 58, 84, 110), new _a2(26, new _a1(8, 106), new _a1(4, 107)), new _a2(28, new _a1(8, 47), new _a1(13, 48)), new _a2(30, new _a1(7, 24), new _a1(22, 25)), new _a2(30, new _a1(22, 15),
 new _a1(13, 16))), new _a3(26, Array(6, 30, 58, 86, 114), new _a2(28, new _a1(10, 114), new _a1(2, 115)), new _a2(28, new _a1(19, 46), new _a1(4, 47)), new _a2(28, new _a1(28, 22), new _a1(6, 23)), new _a2(30, new _a1(33, 16), new _a1(4, 17))), new _a3(27, Array(6, 34, 62, 90, 118), new _a2(30, new _a1(8, 122), new _a1(4, 123)), new _a2(28, new _a1(22, 45), new _a1(3, 46)), new _a2(30, new _a1(8, 23), new _a1(26, 24)), new _a2(30, new _a1(12, 15), new _a1(28, 16))), new _a3(28, Array(6, 26, 50, 74, 98, 122), new _a2(30, new _a1(3, 117), new _a1(10, 118)), new _a2(28, new _a1(3, 45), new _a1(23, 46)),
 new _a2(30, new _a1(4, 24), new _a1(31, 25)), new _a2(30, new _a1(11, 15), new _a1(31, 16))), new _a3(29, Array(6, 30, 54, 78, 102, 126), new _a2(30, new _a1(7, 116), new _a1(7, 117)), new _a2(28, new _a1(21, 45), new _a1(7, 46)), new _a2(30, new _a1(1, 23), new _a1(37, 24)), new _a2(30, new _a1(19, 15), new _a1(26, 16))), new _a3(30, Array(6, 26, 52, 78, 104, 130), new _a2(30, new _a1(5, 115), new _a1(10, 116)), new _a2(28, new _a1(19, 47), new _a1(10, 48)), new _a2(30, new _a1(15, 24), new _a1(25, 25)), new _a2(30, new _a1(23, 15), new _a1(25, 16))), new _a3(31, Array(6, 30, 56, 82, 108, 134), new _a2(30, new _a1(13, 115), new _a1(3, 116)), new _a2(28, new _a1(2, 46), new _a1(29, 47)), new _a2(30, new _a1(42, 24), new _a1(1, 25)), new _a2(30, new _a1(23, 15),
 new _a1(28, 16))), new _a3(32, Array(6, 34, 60, 86, 112, 138), new _a2(30, new _a1(17, 115)), new _a2(28, new _a1(10, 46), new _a1(23, 47)), new _a2(30, new _a1(10, 24), new _a1(35, 25)), new _a2(30, new _a1(19, 15), new _a1(35, 16))), new _a3(33, Array(6, 30, 58, 86, 114, 142), new _a2(30, new _a1(17, 115), new _a1(1, 116)), new _a2(28, new _a1(14, 46), new _a1(21, 47)), new _a2(30, new _a1(29, 24), new _a1(19, 25)), new _a2(30, new _a1(11, 15), new _a1(46, 16))), new _a3(34, Array(6, 34, 62, 90, 118, 146), new _a2(30, new _a1(13, 115), new _a1(6, 116)), new _a2(28, new _a1(14, 46),
 new _a1(23, 47)), new _a2(30, new _a1(44, 24), new _a1(7, 25)), new _a2(30, new _a1(59, 16), new _a1(1, 17))), new _a3(35, Array(6, 30, 54, 78, 102, 126, 150), new _a2(30, new _a1(12, 121), new _a1(7, 122)), new _a2(28, new _a1(12, 47), new _a1(26, 48)), new _a2(30, new _a1(39, 24), new _a1(14, 25)), new _a2(30, new _a1(22, 15), new _a1(41, 16))), new _a3(36, Array(6, 24, 50, 76, 102, 128, 154), new _a2(30, new _a1(6, 121), new _a1(14, 122)), new _a2(28, new _a1(6, 47), new _a1(34, 48)), new _a2(30, new _a1(46, 24), new _a1(10, 25)), new _a2(30, new _a1(2, 15), new _a1(64, 16))),
 new _a3(37, Array(6, 28, 54, 80, 106, 132, 158), new _a2(30, new _a1(17, 122), new _a1(4, 123)), new _a2(28, new _a1(29, 46), new _a1(14, 47)), new _a2(30, new _a1(49, 24), new _a1(10, 25)), new _a2(30, new _a1(24, 15), new _a1(46, 16))), new _a3(38, Array(6, 32, 58, 84, 110, 136, 162), new _a2(30, new _a1(4, 122), new _a1(18, 123)), new _a2(28, new _a1(13, 46), new _a1(32, 47)), new _a2(30, new _a1(48, 24), new _a1(14, 25)), new _a2(30, new _a1(42, 15), new _a1(32, 16))), new _a3(39, Array(6, 26, 54, 82, 110, 138, 166), new _a2(30, new _a1(20, 117), new _a1(4, 118)),
 new _a2(28, new _a1(40, 47), new _a1(7, 48)), new _a2(30, new _a1(43, 24), new _a1(22, 25)), new _a2(30, new _a1(10, 15), new _a1(67, 16))), new _a3(40, Array(6, 30, 58, 86, 114, 142, 170), new _a2(30, new _a1(19, 118), new _a1(6, 119)), new _a2(28, new _a1(18, 47), new _a1(31, 48)), new _a2(30, new _a1(34, 24), new _a1(34, 25)), new _a2(30, new _a1(20, 15), new _a1(61, 16))))
}
function _ae(a, b, c, d, e, f, g, h, i) {
	this.a11 = a, this.a12 = d, this.a13 = g, this.a21 = b, this.a22 = e, this.a23 = h, this.a31 = c, this.a32 = f, this.a33 = i, this._ad = function (a) {
		for (var b = a.length, c = this.a11, d = this.a12, e = this.a13, f = this.a21, g = this.a22, h = this.a23, i = this.a31, j = this.a32, k = this.a33, l = 0; b > l; l += 2) {
			var m = a[l],
				n = a[l + 1],
				o = e * m + h * n + k;
			a[l] = (c * m + f * n + i) / o, a[l + 1] = (d * m + g * n + j) / o
		}
	}, this._fp = function (a, b) {
		for (var c = a.length, d = 0; c > d; d++) {
			var e = a[d],
				f = b[d],
				g = this.a13 * e + this.a23 * f + this.a33;
			a[d] = (this.a11 * e + this.a21 * f + this.a31) / g, b[d] = (this.a12 * e + this.a22 * f + this.a32) / g
		}
	}, this._fr = function () {
		return new _ae(this.a22 * this.a33 - this.a23 * this.a32, this.a23 * this.a31 - this.a21 * this.a33, this.a21 * this.a32 - this.a22 * this.a31, this.a13 * this.a32 - this.a12 * this.a33, this.a11 * this.a33 - this.a13 * this.a31, this.a12 * this.a31 - this.a11 * this.a32, this.a12 * this.a23 - this.a13 * this.a22, this.a13 * this.a21 - this.a11 * this.a23, this.a11 * this.a22 - this.a12 * this.a21)
	}, this.times = function (a) {
		return new _ae(this.a11 * a.a11 + this.a21 * a.a12 + this.a31 * a.a13, this.a11 * a.a21 + this.a21 * a.a22 + this.a31 * a.a23, this.a11 * a.a31 + this.a21 * a.a32 + this.a31 * a.a33, this.a12 * a.a11 + this.a22 * a.a12 + this.a32 * a.a13, this.a12 * a.a21 + this.a22 * a.a22 + this.a32 * a.a23, this.a12 * a.a31 + this.a22 * a.a32 + this.a32 * a.a33, this.a13 * a.a11 + this.a23 * a.a12 + this.a33 * a.a13, this.a13 * a.a21 + this.a23 * a.a22 + this.a33 * a.a23, this.a13 * a.a31 + this.a23 * a.a32 + this.a33 * a.a33)
	}
}
function _bg(a, b) {
	this.bits = a, this.points = b
}
function Detector(a) {
	this.image = a, this._am = null, this._bi = function (a, b, c, d) {
		var e = Math.abs(d - b) > Math.abs(c - a);
		if (e) {
			var f = a;
			a = b, b = f, f = c, c = d, d = f
		}
		for (var g = Math.abs(c - a), h = Math.abs(d - b), i = -g >> 1, j = d > b ? 1 : -1, k = c > a ? 1 : -1, l = 0, m = a, n = b; m != c; m += k) {
			var o = e ? n : m,
				p = e ? m : n;
			if (1 == l ? this.image[o + p * qrcode.width] && l++ : this.image[o + p * qrcode.width] || l++, 3 == l) {
				var q = m - a,
					r = n - b;
				return Math.sqrt(q * q + r * r)
			}
			if (i += h, i > 0) {
				if (n == d) break;
				n += j, i -= g
			}
		}
		var s = c - a,
			t = d - b;
		return Math.sqrt(s * s + t * t)
	}, this._bh = function (a, b, c, d) {
		var e = this._bi(a, b, c, d),
			f = 1,
			g = a - (c - a);
		0 > g ? (f = a / (a - g), g = 0) : g >= qrcode.width && (f = (qrcode.width - 1 - a) / (g - a), g = qrcode.width - 1);
		var h = Math.floor(b - (d - b) * f);
		return f = 1, 0 > h ? (f = b / (b - h), h = 0) : h >= qrcode.height && (f = (qrcode.height - 1 - b) / (h - b), h = qrcode.height - 1), g = Math.floor(a + (g - a) * f), e += this._bi(a, b, g, h), e - 1
	}, this._bj = function (a, b) {
		var c = this._bh(Math.floor(a.X), Math.floor(a.Y), Math.floor(b.X), Math.floor(b.Y)),
			d = this._bh(Math.floor(b.X), Math.floor(b.Y), Math.floor(a.X), Math.floor(a.Y));
		return isNaN(c) ? d / 7 : isNaN(d) ? c / 7 : (c + d) / 14
	}, this._bk = function (a, b, c) {
		return (this._bj(a, b) + this._bj(a, c)) / 2
	}, this.distance = function (a, b) {
		return xDiff = a.X - b.X, yDiff = a.Y - b.Y, Math.sqrt(xDiff * xDiff + yDiff * yDiff)
	}, this._bx = function (a, b, c, d) {
		var e = Math.round(this.distance(a, b) / d),
			f = Math.round(this.distance(a, c) / d),
			g = (e + f >> 1) + 7;
		switch (3 & g) {
			case 0:
				g++;
				break;
			case 2:
				g--;
				break;
			case 3:
				throw "Error"
		}
		return g
	}, this._bl = function (a, b, c, d) {
		var e = Math.floor(d * a),
			f = Math.max(0, b - e),
			g = Math.min(qrcode.width - 1, b + e);
		if (3 * a > g - f) throw "Error";
		var h = Math.max(0, c - e),
			i = Math.min(qrcode.height - 1, c + e),
			j = new _ak(this.image, f, h, g - f, i - h, a, this._am);
		return j.find()
	}, this.createTransform = function (a, b, c, d, e) {
		var g, h, i, j, f = e - 3.5;
		null != d ? (g = d.X, h = d.Y, i = j = f - 3) : (g = b.X - a.X + c.X, h = b.Y - a.Y + c.Y, i = j = f);
		var k = _ae._ag(3.5, 3.5, f, 3.5, i, j, 3.5, f, a.X, a.Y, b.X, b.Y, g, h, c.X, c.Y);
		return k
	}, this._bz = function (a, b, c) {
		var d = _aa;
		return d._af(a, c, b)
	}, this._cd = function (a) {
		var b = a._gq,
			c = a._gs,
			d = a._gp,
			e = this._bk(b, c, d);
		if (1 > e) throw "Error";
		var f = this._bx(b, c, d, e),
			g = _a3._at(f),
			h = g._cr - 7,
			i = null;
		if (g._as.length > 0) for (var j = c.X - b.X + d.X, k = c.Y - b.Y + d.Y, l = 1 - 3 / h, m = Math.floor(b.X + l * (j - b.X)), n = Math.floor(b.Y + l * (k - b.Y)), o = 4; 16 >= o; o <<= 1) {
				i = this._bl(e, m, n, o);
				break
		}
		var r, p = this.createTransform(b, c, d, i, f),
			q = this._bz(this.image, p, f);
		return r = null == i ? Array(d, b, c) : Array(d, b, c, i), new _bg(q, r)
	}, this.detect = function () {
		var a = (new _cc)._ce(this.image);
		return this._cd(a)
	}
}
function _ax(a) {
	this._cf = _cg.forBits(3 & a >> 3), this._fe = 7 & a, this.__defineGetter__("_cg", function () {
		return this._cf
	}), this.__defineGetter__("_dx", function () {
		return this._fe
	}), this.GetHashCode = function () {
		return this._cf.ordinal() << 3 | _fe
	}, this.Equals = function (a) {
		var b = a;
		return this._cf == b._cf && this._fe == b._fe
	}
}
function _cg(a, b, c) {
	this._ff = a, this.bits = b, this.name = c, this.__defineGetter__("Bits", function () {
		return this.bits
	}), this.__defineGetter__("Name", function () {
		return this.name
	}), this.ordinal = function () {
		return this._ff
	}
}
function _ac(a, b) {
	if (b || (b = a), 1 > a || 1 > b) throw "Both dimensions must be greater than 0";
	this.width = a, this.height = b;
	var c = a >> 5;
	0 != (31 & a) && c++, this.rowSize = c, this.bits = Array(c * b);
	for (var d = 0; this.bits.length > d; d++) this.bits[d] = 0;
	this.__defineGetter__("Width", function () {
		return this.width
	}), this.__defineGetter__("Height", function () {
		return this.height
	}), this.__defineGetter__("Dimension", function () {
		if (this.width != this.height) throw "Can't call getDimension() on a non-square matrix";
		return this.width
	}), this._ds = function (a, b) {
		var c = b * this.rowSize + (a >> 5);
		return 0 != (1 & _ew(this.bits[c], 31 & a))
	}, this._dq = function (a, b) {
		var c = b * this.rowSize + (a >> 5);
		this.bits[c] |= 1 << (31 & a)
	}, this.flip = function (a, b) {
		var c = b * this.rowSize + (a >> 5);
		this.bits[c] ^= 1 << (31 & a)
	}, this.clear = function () {
		for (var a = this.bits.length, b = 0; a > b; b++) this.bits[b] = 0
	}, this._bq = function (a, b, c, d) {
		if (0 > b || 0 > a) throw "Left and top must be nonnegative";
		if (1 > d || 1 > c) throw "Height and width must be at least 1";
		var e = a + c,
			f = b + d;
		if (f > this.height || e > this.width) throw "The region must fit inside the matrix";
		for (var g = b; f > g; g++) for (var h = g * this.rowSize, i = a; e > i; i++) this.bits[h + (i >> 5)] |= 1 << (31 & i)
	}
}
function _dl(a, b) {
	this._dv = a, this._dw = b, this.__defineGetter__("_du", function () {
		return this._dv
	}), this.__defineGetter__("Codewords", function () {
		return this._dw
	})
}
function _cl(a) {
	var b = a.Dimension;
	if (21 > b || 1 != (3 & b)) throw "Error _cl";
	this._au = a, this._cp = null, this._co = null, this._dk = function (a, b, c) {
		return this._au._ds(a, b) ? 1 | c << 1 : c << 1
	}, this._cm = function () {
		if (null != this._co) return this._co;
		for (var a = 0, b = 0; 6 > b; b++) a = this._dk(b, 8, a);
		a = this._dk(7, 8, a), a = this._dk(8, 8, a), a = this._dk(8, 7, a);
		for (var c = 5; c >= 0; c--) a = this._dk(8, c, a);
		if (this._co = _ax._ci(a), null != this._co) return this._co;
		var d = this._au.Dimension;
		a = 0;
		for (var e = d - 8, b = d - 1; b >= e; b--) a = this._dk(b, 8, a);
		for (var c = d - 7; d > c; c++) a = this._dk(8, c, a);
		if (this._co = _ax._ci(a), null != this._co) return this._co;
		throw "Error _cm"
	}, this._cq = function () {
		if (null != this._cp) return this._cp;
		var a = this._au.Dimension,
			b = a - 17 >> 2;
		if (6 >= b) return _a3._av(b);
		for (var c = 0, d = a - 11, e = 5; e >= 0; e--) for (var f = a - 9; f >= d; f--) c = this._dk(f, e, c);
		if (this._cp = _a3._aw(c), null != this._cp && this._cp._cr == a) return this._cp;
		c = 0;
		for (var f = 5; f >= 0; f--) for (var e = a - 9; e >= d; e--) c = this._dk(f, e, c);
		if (this._cp = _a3._aw(c), null != this._cp && this._cp._cr == a) return this._cp;
		throw "Error _cq"
	}, this._gk = function () {
		var a = this._cm(),
			b = this._cq(),
			c = _dx._gl(a._dx),
			d = this._au.Dimension;
		c._dj(this._au, d);
		for (var e = b._aq(), f = !0, g = Array(b._dp), h = 0, i = 0, j = 0, k = d - 1; k > 0; k -= 2) {
			6 == k && k--;
			for (var l = 0; d > l; l++) for (var m = f ? d - 1 - l : l, n = 0; 2 > n; n++) e._ds(k - n, m) || (j++, i <<= 1, this._au._ds(k - n, m) && (i |= 1), 8 == j && (g[h++] = i, j = 0, i = 0));
			f ^= !0
		}
		if (h != b._dp) throw "Error _gk";
		return g
	}
}
function _fg() {
	this._dj = function (a, b) {
		for (var c = 0; b > c; c++) for (var d = 0; b > d; d++) this._fw(c, d) && a.flip(d, c)
	}, this._fw = function (a, b) {
		return 0 == (1 & a + b)
	}
}
function _fh() {
	this._dj = function (a, b) {
		for (var c = 0; b > c; c++) for (var d = 0; b > d; d++) this._fw(c, d) && a.flip(d, c)
	}, this._fw = function (a) {
		return 0 == (1 & a)
	}
}
function _fi() {
	this._dj = function (a, b) {
		for (var c = 0; b > c; c++) for (var d = 0; b > d; d++) this._fw(c, d) && a.flip(d, c)
	}, this._fw = function (a, b) {
		return 0 == b % 3
	}
}
function _fj() {
	this._dj = function (a, b) {
		for (var c = 0; b > c; c++) for (var d = 0; b > d; d++) this._fw(c, d) && a.flip(d, c)
	}, this._fw = function (a, b) {
		return 0 == (a + b) % 3
	}
}
function _fk() {
	this._dj = function (a, b) {
		for (var c = 0; b > c; c++) for (var d = 0; b > d; d++) this._fw(c, d) && a.flip(d, c)
	}, this._fw = function (a, b) {
		return 0 == (1 & _ew(a, 1) + b / 3)
	}
}
function _fl() {
	this._dj = function (a, b) {
		for (var c = 0; b > c; c++) for (var d = 0; b > d; d++) this._fw(c, d) && a.flip(d, c)
	}, this._fw = function (a, b) {
		var c = a * b;
		return 0 == (1 & c) + c % 3
	}
}
function _fm() {
	this._dj = function (a, b) {
		for (var c = 0; b > c; c++) for (var d = 0; b > d; d++) this._fw(c, d) && a.flip(d, c)
	}, this._fw = function (a, b) {
		var c = a * b;
		return 0 == (1 & (1 & c) + c % 3)
	}
}
function _fn() {
	this._dj = function (a, b) {
		for (var c = 0; b > c; c++) for (var d = 0; b > d; d++) this._fw(c, d) && a.flip(d, c)
	}, this._fw = function (a, b) {
		return 0 == (1 & (1 & a + b) + a * b % 3)
	}
}
function _db(a) {
	this._fa = a, this.decode = function (a, b) {
		for (var c = new _bp(this._fa, a), d = Array(b), e = 0; d.length > e; e++) d[e] = 0;
		for (var f = !1, g = !0, e = 0; b > e; e++) {
			var h = c.evaluateAt(this._fa.exp(f ? e + 1 : e));
			d[d.length - 1 - e] = h, 0 != h && (g = !1)
		}
		if (!g) for (var i = new _bp(this._fa, d), j = this._eb(this._fa._ba(b, 1), i, b), k = j[0], l = j[1], m = this._ey(k), n = this._di(l, m, f), e = 0; m.length > e; e++) {
				var o = a.length - 1 - this._fa.log(m[e]);
				if (0 > o) throw "ReedSolomonException Bad error location";
				a[o] = _az._bd(a[o], n[e])
		}
	}, this._eb = function (a, b, c) {
		if (a._ec < b._ec) {
			var d = a;
			a = b, b = d
		}
		for (var e = a, f = b, g = this._fa.One, h = this._fa.Zero, i = this._fa.Zero, j = this._fa.One; f._ec >= Math.floor(c / 2);) {
			var k = e,
				l = g,
				m = i;
			if (e = f, g = h, i = j, e.Zero) throw "r_{i-1} was zero";
			f = k;
			for (var n = this._fa.Zero, o = e._ex(e._ec), p = this._fa.inverse(o); f._ec >= e._ec && !f.Zero;) {
				var q = f._ec - e._ec,
					r = this._fa.multiply(f._ex(f._ec), p);
				n = n._bd(this._fa._ba(q, r)), f = f._bd(e._dc(q, r))
			}
			h = n.multiply1(g)._bd(l), j = n.multiply1(i)._bd(m)
		}
		var s = j._ex(0);
		if (0 == s) throw "ReedSolomonException sigmaTilde(0) was zero";
		var t = this._fa.inverse(s),
			u = j.multiply2(t),
			v = f.multiply2(t);
		return Array(u, v)
	}, this._ey = function (a) {
		var b = a._ec;
		if (1 == b) return Array(a._ex(1));
		for (var c = Array(b), d = 0, e = 1; 256 > e && b > d; e++) 0 == a.evaluateAt(e) && (c[d] = this._fa.inverse(e), d++);
		if (d != b) throw "Error locator degree does not match number of roots";
		return c
	}, this._di = function (a, b, c) {
		for (var d = b.length, e = Array(d), f = 0; d > f; f++) {
			for (var g = this._fa.inverse(b[f]), h = 1, i = 0; d > i; i++) f != i && (h = this._fa.multiply(h, _az._bd(1, this._fa.multiply(b[i], g))));
			e[f] = this._fa.multiply(a.evaluateAt(g), this._fa.inverse(h)), c && (e[f] = this._fa.multiply(e[f], g))
		}
		return e
	}
}
function _bp(a, b) {
	if (null == b || 0 == b.length) throw "bad arguments";
	this._fa = a;
	var c = b.length;
	if (c > 1 && 0 == b[0]) {
		for (var d = 1; c > d && 0 == b[d];) d++;
		if (d == c) this._dd = a.Zero._dd;
		else {
			this._dd = Array(c - d);
			for (var e = 0; this._dd.length > e; e++) this._dd[e] = 0;
			for (var f = 0; this._dd.length > f; f++) this._dd[f] = b[d + f]
		}
	} else this._dd = b;
	this.__defineGetter__("Zero", function () {
		return 0 == this._dd[0]
	}), this.__defineGetter__("_ec", function () {
		return this._dd.length - 1
	}), this.__defineGetter__("Coefficients", function () {
		return this._dd
	}), this._ex = function (a) {
		return this._dd[this._dd.length - 1 - a]
	}, this.evaluateAt = function (a) {
		if (0 == a) return this._ex(0);
		var b = this._dd.length;
		if (1 == a) {
			for (var c = 0, d = 0; b > d; d++) c = _az._bd(c, this._dd[d]);
			return c
		}
		for (var e = this._dd[0], d = 1; b > d; d++) e = _az._bd(this._fa.multiply(a, e), this._dd[d]);
		return e
	}, this._bd = function (b) {
		if (this._fa != b._fa) throw "GF256Polys do not have same _az _fa";
		if (this.Zero) return b;
		if (b.Zero) return this;
		var c = this._dd,
			d = b._dd;
		if (c.length > d.length) {
			var e = c;
			c = d, d = e
		}
		for (var f = Array(d.length), g = d.length - c.length, h = 0; g > h; h++) f[h] = d[h];
		for (var i = g; d.length > i; i++) f[i] = _az._bd(c[i - g], d[i]);
		return new _bp(a, f)
	}, this.multiply1 = function (a) {
		if (this._fa != a._fa) throw "GF256Polys do not have same _az _fa";
		if (this.Zero || a.Zero) return this._fa.Zero;
		for (var b = this._dd, c = b.length, d = a._dd, e = d.length, f = Array(c + e - 1), g = 0; c > g; g++) for (var h = b[g], i = 0; e > i; i++) f[g + i] = _az._bd(f[g + i], this._fa.multiply(h, d[i]));
		return new _bp(this._fa, f)
	}, this.multiply2 = function (a) {
		if (0 == a) return this._fa.Zero;
		if (1 == a) return this;
		for (var b = this._dd.length, c = Array(b), d = 0; b > d; d++) c[d] = this._fa.multiply(this._dd[d], a);
		return new _bp(this._fa, c)
	}, this._dc = function (a, b) {
		if (0 > a) throw "bad arguments";
		if (0 == b) return this._fa.Zero;
		for (var c = this._dd.length, d = Array(c + a), e = 0; d.length > e; e++) d[e] = 0;
		for (var e = 0; c > e; e++) d[e] = this._fa.multiply(this._dd[e], b);
		return new _bp(this._fa, d)
	}, this.divide = function (a) {
		if (this._fa != a._fa) throw "GF256Polys do not have same _az _fa";
		if (a.Zero) throw "Divide by 0";
		for (var b = this._fa.Zero, c = this, d = a._ex(a._ec), e = this._fa.inverse(d); c._ec >= a._ec && !c.Zero;) {
			var f = c._ec - a._ec,
				g = this._fa.multiply(c._ex(c._ec), e),
				h = a._dc(f, g),
				i = this._fa._ba(f, g);
			b = b._bd(i), c = c._bd(h)
		}
		return Array(b, c)
	}
}
function _az(a) {
	this._gh = Array(256), this._gi = Array(256);
	for (var b = 1, c = 0; 256 > c; c++) this._gh[c] = b, b <<= 1, b >= 256 && (b ^= a);
	for (var c = 0; 255 > c; c++) this._gi[this._gh[c]] = c;
	var d = Array(1);
	d[0] = 0, this.zero = new _bp(this, Array(d));
	var e = Array(1);
	e[0] = 1, this.one = new _bp(this, Array(e)), this.__defineGetter__("Zero", function () {
		return this.zero
	}), this.__defineGetter__("One", function () {
		return this.one
	}), this._ba = function (a, b) {
		if (0 > a) throw "bad arguments";
		if (0 == b) return zero;
		for (var c = Array(a + 1), d = 0; c.length > d; d++) c[d] = 0;
		return c[0] = b, new _bp(this, c)
	}, this.exp = function (a) {
		return this._gh[a]
	}, this.log = function (a) {
		if (0 == a) throw "bad arguments";
		return this._gi[a]
	}, this.inverse = function (a) {
		if (0 == a) throw "System.ArithmeticException";
		return this._gh[255 - this._gi[a]]
	}, this.multiply = function (a, b) {
		return 0 == a || 0 == b ? 0 : 1 == a ? b : 1 == b ? a : this._gh[(this._gi[a] + this._gi[b]) % 255]
	}
}
function _ew(a, b) {
	return a >= 0 ? a >> b : (a >> b) + (2 << ~b)
}
function _cz(a, b, c) {
	this.x = a, this.y = b, this.count = 1, this._aj = c, this.__defineGetter__("_ei", function () {
		return this._aj
	}), this.__defineGetter__("Count", function () {
		return this.count
	}), this.__defineGetter__("X", function () {
		return this.x
	}), this.__defineGetter__("Y", function () {
		return this.y
	}), this._ek = function () {
		this.count++
	}, this._ev = function (a, b, c) {
		if (a >= Math.abs(b - this.y) && a >= Math.abs(c - this.x)) {
			var d = Math.abs(a - this._aj);
			return 1 >= d || 1 >= d / this._aj
		}
		return !1
	}
}
function _es(a) {
	this._go = a[0], this._gu = a[1], this._gr = a[2], this.__defineGetter__("_gp", function () {
		return this._go
	}), this.__defineGetter__("_gq", function () {
		return this._gu
	}), this.__defineGetter__("_gs", function () {
		return this._gr
	})
}
function _cc() {
	this.image = null, this._cv = [], this._ge = !1, this._al = Array(0, 0, 0, 0, 0), this._am = null, this.__defineGetter__("_da", function () {
		return this._al[0] = 0, this._al[1] = 0, this._al[2] = 0, this._al[3] = 0, this._al[4] = 0, this._al
	}), this._ao = function (a) {
		for (var b = 0, c = 0; 5 > c; c++) {
			var d = a[c];
			if (0 == d) return !1;
			b += d
		}
		if (7 > b) return !1;
		var e = Math.floor((b << _el) / 7),
			f = Math.floor(e / 2);
		return f > Math.abs(e - (a[0] << _el)) && f > Math.abs(e - (a[1] << _el)) && 3 * f > Math.abs(3 * e - (a[2] << _el)) && f > Math.abs(e - (a[3] << _el)) && f > Math.abs(e - (a[4] << _el))
	}, this._an = function (a, b) {
		return b - a[4] - a[3] - a[2] / 2
	}, this._ap = function (a, b, c, d) {
		for (var e = this.image, f = qrcode.height, g = this._da, h = a; h >= 0 && e[b + h * qrcode.width];) g[2]++, h--;
		if (0 > h) return 0 / 0;
		for (; h >= 0 && !e[b + h * qrcode.width] && c >= g[1];) g[1]++, h--;
		if (0 > h || g[1] > c) return 0 / 0;
		for (; h >= 0 && e[b + h * qrcode.width] && c >= g[0];) g[0]++, h--;
		if (g[0] > c) return 0 / 0;
		for (h = a + 1; f > h && e[b + h * qrcode.width];) g[2]++, h++;
		if (h == f) return 0 / 0;
		for (; f > h && !e[b + h * qrcode.width] && c > g[3];) g[3]++, h++;
		if (h == f || g[3] >= c) return 0 / 0;
		for (; f > h && e[b + h * qrcode.width] && c > g[4];) g[4]++, h++;
		if (g[4] >= c) return 0 / 0;
		var i = g[0] + g[1] + g[2] + g[3] + g[4];
		return 5 * Math.abs(i - d) >= 2 * d ? 0 / 0 : this._ao(g) ? this._an(g, h) : 0 / 0
	}, this._ej = function (a, b, c, d) {
		for (var e = this.image, f = qrcode.width, g = this._da, h = a; h >= 0 && e[h + b * qrcode.width];) g[2]++, h--;
		if (0 > h) return 0 / 0;
		for (; h >= 0 && !e[h + b * qrcode.width] && c >= g[1];) g[1]++, h--;
		if (0 > h || g[1] > c) return 0 / 0;
		for (; h >= 0 && e[h + b * qrcode.width] && c >= g[0];) g[0]++, h--;
		if (g[0] > c) return 0 / 0;
		for (h = a + 1; f > h && e[h + b * qrcode.width];) g[2]++, h++;
		if (h == f) return 0 / 0;
		for (; f > h && !e[h + b * qrcode.width] && c > g[3];) g[3]++, h++;
		if (h == f || g[3] >= c) return 0 / 0;
		for (; f > h && e[h + b * qrcode.width] && c > g[4];) g[4]++, h++;
		if (g[4] >= c) return 0 / 0;
		var i = g[0] + g[1] + g[2] + g[3] + g[4];
		return 5 * Math.abs(i - d) >= d ? 0 / 0 : this._ao(g) ? this._an(g, h) : 0 / 0
	}, this._cu = function (a, b, c) {
		var d = a[0] + a[1] + a[2] + a[3] + a[4],
			e = this._an(a, c),
			f = this._ap(b, Math.floor(e), a[2], d);
		if (!isNaN(f) && (e = this._ej(Math.floor(e), Math.floor(f), a[2], d), !isNaN(e))) {
			for (var g = d / 7, h = !1, i = this._cv.length, j = 0; i > j; j++) {
				var k = this._cv[j];
				if (k._ev(g, f, e)) {
					k._ek(), h = !0;
					break
				}
			}
			if (!h) {
				var l = new _cz(e, f, g);
				this._cv.push(l), null != this._am && this._am._ep(l)
			}
			return !0
		}
		return !1
	}, this._ee = function () {
		var a = this._cv.length;
		if (3 > a) throw "Couldn't find enough finder patterns";
		if (a > 3) {
			for (var b = 0, c = 0; a > c; c++) b += this._cv[c]._ei;
			for (var d = b / a, c = 0; this._cv.length > c && this._cv.length > 3; c++) {
				var e = this._cv[c];
				Math.abs(e._ei - d) > .2 * d && (this._cv.remove(c), c--)
			}
		}
		return this._cv.Count > 3, Array(this._cv[0], this._cv[1], this._cv[2])
	}, this._eq = function () {
		var a = this._cv.length;
		if (1 >= a) return 0;
		for (var b = null, c = 0; a > c; c++) {
			var d = this._cv[c];
			if (d.Count >= _eg) {
				if (null != b) return this._ge = !0, Math.floor((Math.abs(b.X - d.X) - Math.abs(b.Y - d.Y)) / 2);
				b = d
			}
		}
		return 0
	}, this._cx = function () {
		for (var a = 0, b = 0, c = this._cv.length, d = 0; c > d; d++) {
			var e = this._cv[d];
			e.Count >= _eg && (a++, b += e._ei)
		}
		if (3 > a) return !1;
		for (var f = b / c, g = 0, d = 0; c > d; d++) e = this._cv[d], g += Math.abs(e._ei - f);
		return .05 * b >= g
	}, this._ce = function (a) {
		var b = !1;
		this.image = a;
		var c = qrcode.height,
			d = qrcode.width,
			e = Math.floor(3 * c / (4 * _eh));
		(_gf > e || b) && (e = _gf);
		for (var f = !1, g = Array(5), h = e - 1; c > h && !f; h += e) {
			g[0] = 0, g[1] = 0, g[2] = 0, g[3] = 0, g[4] = 0;
			for (var i = 0, j = 0; d > j; j++) if (a[j + h * qrcode.width]) 1 == (1 & i) && i++, g[i]++;
				else if (0 == (1 & i)) if (4 == i) if (this._ao(g)) {
						var k = this._cu(g, h, j);
						if (k) if (e = 2, this._ge) f = this._cx();
							else {
								var l = this._eq();
								l > g[2] && (h += l - g[2] - e, j = d - 1)
							} else {
								do j++; while (d > j && !a[j + h * qrcode.width]);
								j--
							}
						i = 0, g[0] = 0, g[1] = 0, g[2] = 0, g[3] = 0, g[4] = 0
					} else g[0] = g[2], g[1] = g[3], g[2] = g[4], g[3] = 1, g[4] = 0, i = 3;
					else g[++i]++;
					else g[i]++;
			if (this._ao(g)) {
				var k = this._cu(g, h, d);
				k && (e = g[0], this._ge && (f = _cx()))
			}
		}
		var m = this._ee();
		return qrcode._er(m), new _es(m)
	}
}
function _ai(a, b, c) {
	this.x = a, this.y = b, this.count = 1, this._aj = c, this.__defineGetter__("_ei", function () {
		return this._aj
	}), this.__defineGetter__("Count", function () {
		return this.count
	}), this.__defineGetter__("X", function () {
		return Math.floor(this.x)
	}), this.__defineGetter__("Y", function () {
		return Math.floor(this.y)
	}), this._ek = function () {
		this.count++
	}, this._ev = function (a, b, c) {
		if (a >= Math.abs(b - this.y) && a >= Math.abs(c - this.x)) {
			var d = Math.abs(a - this._aj);
			return 1 >= d || 1 >= d / this._aj
		}
		return !1
	}
}
function _ak(a, b, c, d, e, f, g) {
	this.image = a, this._cv = Array(), this.startX = b, this.startY = c, this.width = d, this.height = e, this._ef = f, this._al = Array(0, 0, 0), this._am = g, this._an = function (a, b) {
		return b - a[2] - a[1] / 2
	}, this._ao = function (a) {
		for (var b = this._ef, c = b / 2, d = 0; 3 > d; d++) if (Math.abs(b - a[d]) >= c) return !1;
		return !0
	}, this._ap = function (a, b, c, d) {
		var e = this.image,
			f = qrcode.height,
			g = this._al;
		g[0] = 0, g[1] = 0, g[2] = 0;
		for (var h = a; h >= 0 && e[b + h * qrcode.width] && c >= g[1];) g[1]++, h--;
		if (0 > h || g[1] > c) return 0 / 0;
		for (; h >= 0 && !e[b + h * qrcode.width] && c >= g[0];) g[0]++, h--;
		if (g[0] > c) return 0 / 0;
		for (h = a + 1; f > h && e[b + h * qrcode.width] && c >= g[1];) g[1]++, h++;
		if (h == f || g[1] > c) return 0 / 0;
		for (; f > h && !e[b + h * qrcode.width] && c >= g[2];) g[2]++, h++;
		if (g[2] > c) return 0 / 0;
		var i = g[0] + g[1] + g[2];
		return 5 * Math.abs(i - d) >= 2 * d ? 0 / 0 : this._ao(g) ? this._an(g, h) : 0 / 0
	}, this._cu = function (a, b, c) {
		var d = a[0] + a[1] + a[2],
			e = this._an(a, c),
			f = this._ap(b, Math.floor(e), 2 * a[1], d);
		if (!isNaN(f)) {
			for (var g = (a[0] + a[1] + a[2]) / 3, h = this._cv.length, i = 0; h > i; i++) {
				var j = this._cv[i];
				if (j._ev(g, f, e)) return new _ai(e, f, g)
			}
			var k = new _ai(e, f, g);
			this._cv.push(k), null != this._am && this._am._ep(k)
		}
		return null
	}, this.find = function () {
		for (var b = this.startX, e = this.height, f = b + d, g = c + (e >> 1), h = Array(0, 0, 0), i = 0; e > i; i++) {
			var j = g + (0 == (1 & i) ? i + 1 >> 1 : -(i + 1 >> 1));
			h[0] = 0, h[1] = 0, h[2] = 0;
			for (var k = b; f > k && !a[k + qrcode.width * j];) k++;
			for (var l = 0; f > k;) {
				if (a[k + j * qrcode.width]) if (1 == l) h[l]++;
					else if (2 == l) {
					if (this._ao(h)) {
						var m = this._cu(h, j, k);
						if (null != m) return m
					}
					h[0] = h[2], h[1] = 1, h[2] = 0, l = 1
				} else h[++l]++;
				else 1 == l && l++, h[l]++;
				k++
			}
			if (this._ao(h)) {
				var m = this._cu(h, j, f);
				if (null != m) return m
			}
		}
		if (0 != this._cv.length) return this._cv[0];
		throw "Couldn't find enough alignment patterns"
	}
}
function QRCodeDataBlockReader(a, b, c) {
	this._ed = 0, this._cw = 7, this.dataLength = 0, this.blocks = a, this._en = c, 9 >= b ? this.dataLengthMode = 0 : b >= 10 && 26 >= b ? this.dataLengthMode = 1 : b >= 27 && 40 >= b && (this.dataLengthMode = 2), this._gd = function (a) {
		var b = 0;
		if (this._cw + 1 > a) {
			for (var c = 0, d = 0; a > d; d++) c += 1 << d;
			return c <<= this._cw - a + 1, b = (this.blocks[this._ed] & c) >> this._cw - a + 1, this._cw -= a, b
		}
		if (this._cw + 1 + 8 > a) {
			for (var e = 0, d = 0; this._cw + 1 > d; d++) e += 1 << d;
			return b = (this.blocks[this._ed] & e) << a - (this._cw + 1), this._ed++, b += this.blocks[this._ed] >> 8 - (a - (this._cw + 1)), this._cw = this._cw - a % 8, 0 > this._cw && (this._cw = 8 + this._cw), b
		}
		if (this._cw + 1 + 16 > a) {
			for (var e = 0, f = 0, d = 0; this._cw + 1 > d; d++) e += 1 << d;
			var g = (this.blocks[this._ed] & e) << a - (this._cw + 1);
			this._ed++;
			var h = this.blocks[this._ed] << a - (this._cw + 1 + 8);
			this._ed++;
			for (var d = 0; a - (this._cw + 1 + 8) > d; d++) f += 1 << d;
			f <<= 8 - (a - (this._cw + 1 + 8));
			var i = (this.blocks[this._ed] & f) >> 8 - (a - (this._cw + 1 + 8));
			return b = g + h + i, this._cw = this._cw - (a - 8) % 8, 0 > this._cw && (this._cw = 8 + this._cw), b
		}
		return 0
	}, this.NextMode = function () {
		return this._ed > this.blocks.length - this._en - 2 ? 0 : this._gd(4)
	}, this.getDataLength = function (a) {
		for (var b = 0;;) {
			if (1 == a >> b) break;
			b++
		}
		return this._gd(qrcode._eo[this.dataLengthMode][b])
	}, this.getRomanAndFigureString = function (a) {
		var b = a,
			c = 0,
			d = "",
			e = Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", " ", "$", "%", "*", "+", "-", ".", "/", ":");
		do if (b > 1) {
				c = this._gd(11);
				var f = Math.floor(c / 45),
					g = c % 45;
				d += e[f], d += e[g], b -= 2
			} else 1 == b && (c = this._gd(6), d += e[c], b -= 1); while (b > 0);
		return d
	}, this.getFigureString = function (a) {
		var b = a,
			c = 0,
			d = "";
		do b >= 3 ? (c = this._gd(10), 100 > c && (d += "0"), 10 > c && (d += "0"), b -= 3) : 2 == b ? (c = this._gd(7), 10 > c && (d += "0"), b -= 2) : 1 == b && (c = this._gd(4), b -= 1), d += c; while (b > 0);
		return d
	}, this.get8bitByteArray = function (a) {
		var b = a,
			c = 0,
			d = Array();
		do c = this._gd(8), d.push(c), b--; while (b > 0);
		return d
	}, this.getKanjiString = function (a) {
		var b = a,
			c = 0,
			d = "";
		do {
			c = _gd(13);
			var e = c % 192,
				f = c / 192,
				g = (f << 8) + e,
				h = 0;
			h = 40956 >= g + 33088 ? g + 33088 : g + 49472, d += String.fromCharCode(h), b--
		} while (b > 0);
		return d
	}, this.__defineGetter__("DataByte", function () {
		for (var a = Array(), b = 1, c = 2, d = 4, e = 8;;) {
			var f = this.NextMode();
			if (0 == f) {
				if (a.length > 0) break;
				throw "Empty data block"
			}
			if (f != b && f != c && f != d && f != e) throw "Invalid mode: " + f + " in (block:" + this._ed + " bit:" + this._cw + ")";
			if (dataLength = this.getDataLength(f), 1 > dataLength) throw "Invalid data length: " + dataLength;
			switch (f) {
				case b:
					for (var g = this.getFigureString(dataLength), h = Array(g.length), i = 0; g.length > i; i++) h[i] = g.charCodeAt(i);
					a.push(h);
					break;
				case c:
					for (var g = this.getRomanAndFigureString(dataLength), h = Array(g.length), i = 0; g.length > i; i++) h[i] = g.charCodeAt(i);
					a.push(h);
					break;
				case d:
					var j = this.get8bitByteArray(dataLength);
					a.push(j);
					break;
				case e:
					var g = this.getKanjiString(dataLength);
					a.push(g)
			}
		}
		return a
	})
}
///////////////////////////
///////////////////////////
///////////////////////////
///////////////////////////
///////////////////////////
///////////////////////////
///////////////////////////
///////////////////////////
///////////////////////////
///////////////////////////
///////////////////////////







_aa = {}, _aa._ab = function (a, b) {
	for (var c = qrcode.width, d = qrcode.height, e = !0, f = 0; b.Length > f && e; f += 2) {
		var g = Math.floor(b[f]),
			h = Math.floor(b[f + 1]);
		if (-1 > g || g > c || -1 > h || h > d) throw "Error._ab ";
		e = !1, -1 == g ? (b[f] = 0, e = !0) : g == c && (b[f] = c - 1, e = !0), -1 == h ? (b[f + 1] = 0, e = !0) : h == d && (b[f + 1] = d - 1, e = !0)
	}
	e = !0;
	for (var f = b.Length - 2; f >= 0 && e; f -= 2) {
		var g = Math.floor(b[f]),
			h = Math.floor(b[f + 1]);
		if (-1 > g || g > c || -1 > h || h > d) throw "Error._ab ";
		e = !1, -1 == g ? (b[f] = 0, e = !0) : g == c && (b[f] = c - 1, e = !0), -1 == h ? (b[f + 1] = 0, e = !0) : h == d && (b[f + 1] = d - 1, e = !0)
	}
}, _aa._af = function (a, b, c) {
	for (var d = new _ac(b), e = Array(b << 1), f = 0; b > f; f++) {
		for (var g = e.length, h = f + .5, i = 0; g > i; i += 2) e[i] = (i >> 1) + .5, e[i + 1] = h;
		c._ad(e), _aa._ab(a, e);
		try {
			for (var i = 0; g > i; i += 2) {
				var j = 4 * Math.floor(e[i]) + 4 * Math.floor(e[i + 1]) * qrcode.width,
					k = a[Math.floor(e[i]) + qrcode.width * Math.floor(e[i + 1])];
				qrcode.imagedata.data[j] = k ? 255 : 0, qrcode.imagedata.data[j + 1] = k ? 255 : 0, qrcode.imagedata.data[j + 2] = 0, qrcode.imagedata.data[j + 3] = 255, k && d._dq(i >> 1, f)
			}
		} catch (l) {
			throw "Error._ab"
		}
	}
	return d
}, _aa._ah = function (a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r) {
	var s = _ae._ag(c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r);
	return _aa._af(a, b, s)
}, _a3._bv = Array(31892, 34236, 39577, 42195, 48118, 51042, 55367, 58893, 63784, 68472, 70749, 76311, 79154, 84390, 87683, 92361, 96236, 102084, 102881, 110507, 110734, 117786, 119615, 126325, 127568, 133589, 136944, 141498, 145311, 150283, 152622, 158308, 161089, 167017), _a3.VERSIONS = _ay(), _a3._av = function (a) {
	if (1 > a || a > 40) throw "bad arguments";
	return _a3.VERSIONS[a - 1]
}, _a3._at = function (a) {
	if (1 != a % 4) throw "Error _at";
	try {
		return _a3._av(a - 17 >> 2)
	} catch (b) {
		throw "Error _av"
	}
}, _a3._aw = function (a) {
	for (var b = 4294967295, c = 0, d = 0; _a3._bv.length > d; d++) {
		var e = _a3._bv[d];
		if (e == a) return this._av(d + 7);
		var f = _ax._gj(a, e);
		b > f && (c = d + 7, b = f)
	}
	return 3 >= b ? this._av(c) : null
}, _ae._ag = function (a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p) {
	var q = this._be(a, b, c, d, e, f, g, h),
		r = this._bf(i, j, k, l, m, n, o, p);
	return r.times(q)
}, _ae._bf = function (a, b, c, d, e, f, g, h) {
	return dy2 = h - f, dy3 = b - d + f - h, 0 == dy2 && 0 == dy3 ? new _ae(c - a, e - c, a, d - b, f - d, b, 0, 0, 1) : (dx1 = c - e, dx2 = g - e, dx3 = a - c + e - g, dy1 = d - f, _dr = dx1 * dy2 - dx2 * dy1, a13 = (dx3 * dy2 - dx2 * dy3) / _dr, a23 = (dx1 * dy3 - dx3 * dy1) / _dr, new _ae(c - a + a13 * c, g - a + a23 * g, a, d - b + a13 * d, h - b + a23 * h, b, a13, a23, 1))
}, _ae._be = function (a, b, c, d, e, f, g, h) {
	return this._bf(a, b, c, d, e, f, g, h)._fr()
};
var _ca = 21522,
	_cb = Array(Array(21522, 0), Array(20773, 1), Array(24188, 2), Array(23371, 3), Array(17913, 4), Array(16590, 5), Array(20375, 6), Array(19104, 7), Array(30660, 8), Array(29427, 9), Array(32170, 10), Array(30877, 11), Array(26159, 12), Array(25368, 13), Array(27713, 14), Array(26998, 15), Array(5769, 16), Array(5054, 17), Array(7399, 18), Array(6608, 19), Array(1890, 20), Array(597, 21), Array(3340, 22), Array(2107, 23), Array(13663, 24), Array(12392, 25), Array(16177, 26), Array(14854, 27), Array(9396, 28), Array(8579, 29), Array(11994, 30), Array(11245, 31)),
	_ch = Array(0, 1, 1, 2, 1, 2, 2, 3, 1, 2, 2, 3, 2, 3, 3, 4);
_ax._gj = function (a, b) {
	return a ^= b, _ch[15 & a] + _ch[15 & _ew(a, 4)] + _ch[15 & _ew(a, 8)] + _ch[15 & _ew(a, 12)] + _ch[15 & _ew(a, 16)] + _ch[15 & _ew(a, 20)] + _ch[15 & _ew(a, 24)] + _ch[15 & _ew(a, 28)]
}, _ax._ci = function (a) {
	var b = _ax._cj(a);
	return null != b ? b : _ax._cj(a ^ _ca)
}, _ax._cj = function (a) {
	for (var b = 4294967295, c = 0, d = 0; _cb.length > d; d++) {
		var e = _cb[d],
			f = e[0];
		if (f == a) return new _ax(e[1]);
		var g = this._gj(a, f);
		b > g && (c = e[1], b = g)
	}
	return 3 >= b ? new _ax(c) : null
}, _cg.forBits = function (a) {
	if (0 > a || a >= FOR_BITS.Length) throw "bad arguments";
	return FOR_BITS[a]
};
var L = new _cg(0, 1, "L"),
	M = new _cg(1, 0, "M"),
	Q = new _cg(2, 3, "Q"),
	H = new _cg(3, 2, "H"),
	FOR_BITS = Array(M, L, H, Q);
_dl._gn = function (a, b, c) {
	if (a.length != b._dp) throw "bad arguments";
	for (var d = b._bu(c), e = 0, f = d._fb(), g = 0; f.length > g; g++) e += f[g].Count;
	for (var h = Array(e), i = 0, j = 0; f.length > j; j++) for (var k = f[j], g = 0; k.Count > g; g++) {
			var l = k._dm,
				m = d._bo + l;
			h[i++] = new _dl(l, Array(m))
	}
	for (var n = h[0]._dw.length, o = h.length - 1; o >= 0;) {
		var p = h[o]._dw.length;
		if (p == n) break;
		o--
	}
	o++;
	for (var q = n - d._bo, r = 0, g = 0; q > g; g++) for (var j = 0; i > j; j++) h[j]._dw[g] = a[r++];
	for (var j = o; i > j; j++) h[j]._dw[q] = a[r++];
	for (var s = h[0]._dw.length, g = q; s > g; g++) for (var j = 0; i > j; j++) {
			var t = o > j ? g : g + 1;
			h[j]._dw[t] = a[r++]
	}
	return h
}, _dx = {}, _dx._gl = function (a) {
	if (0 > a || a > 7) throw "bad arguments";
	return _dx._dy[a]
}, _dx._dy = Array(new _fg, new _fh, new _fi, new _fj, new _fk, new _fl, new _fm, new _fn), _az._bb = new _az(285), _az._bc = new _az(301), _az._bd = function (a, b) {
	return a ^ b
}, Decoder = {}, Decoder.rsDecoder = new _db(_az._bb), Decoder.correctErrors = function (a, b) {
	for (var c = a.length, d = Array(c), e = 0; c > e; e++) d[e] = 255 & a[e];
	var f = a.length - b;
	try {
		Decoder.rsDecoder.decode(d, f)
	} catch (g) {
		throw g
	}
	for (var e = 0; b > e; e++) a[e] = d[e]
}, Decoder.decode = function (a) {
	for (var b = new _cl(a), c = b._cq(), d = b._cm()._cg, e = b._gk(), f = _dl._gn(e, c, d), g = 0, h = 0; f.Length > h; h++) g += f[h]._du;
	for (var i = Array(g), j = 0, k = 0; f.length > k; k++) {
		var l = f[k],
			m = l.Codewords,
			n = l._du;
		Decoder.correctErrors(m, n);
		for (var h = 0; n > h; h++) i[j++] = m[h]
	}
	var o = new QRCodeDataBlockReader(i, c._fd, d.Bits);
	return o
}, qrcode = {}, qrcode.imagedata = null, qrcode.width = 0, qrcode.height = 0, qrcode.qrCodeSymbol = null, qrcode.debug = !1, qrcode._eo = [
	[10, 9, 8, 8],
	[12, 11, 16, 10],
	[14, 13, 16, 12]
], qrcode.callback = null, qrcode.decode = function (a) {
	if (0 == arguments.length) {
		var b = gCanvas;
			c = b.getContext("2d");
		return qrcode.width = b.width, qrcode.height = b.height, qrcode.imagedata = c.getImageData(0, 0, qrcode.width, qrcode.height), qrcode.result = qrcode.process(c), null != qrcode.callback && qrcode.callback(qrcode.result), qrcode.result
	}
	var d = document.getElementById('outputimg');
	d.onload = function () {
		var a = document.createElement("canvas");
		var b = a.getContext("2d");
			a.width = d.width;
			a.height = d.height;
			b.drawImage(d, 0, 0);
			qrcode.width = d.width;
			qrcode.height = d.height;


		try {
			qrcode.imagedata = b.getImageData(0, 0, d.width, d.height);
		} catch (f) {
			return qrcode.result = "Cross domain image reading not supported in your browser! Save it to your computer then select the file!", null != qrcode.callback && qrcode.callback(qrcode.result), void 0
		}
		try {
			qrcode.result = qrcode.process(b)
		} catch (f) {
			console.log(f), qrcode.result = "Erreur. Décodage impossible."
		}
		null != qrcode.callback && qrcode.callback(qrcode.result)
	}, d.src = a
}, qrcode.decode_utf8 = function (a) {
	return decodeURIComponent(escape(a))
}, qrcode.process = function (a) {
	var b = (new Date).getTime(),
		c = qrcode.grayScaleToBitmap(qrcode.grayscale());
	if (qrcode.debug) {
		for (var d = 0; qrcode.height > d; d++) for (var e = 0; qrcode.width > e; e++) {
				var f = 4 * e + 4 * d * qrcode.width;
				qrcode.imagedata.data[f] = c[e + d * qrcode.width] ? 0 : 0, qrcode.imagedata.data[f + 1] = c[e + d * qrcode.width] ? 0 : 0, qrcode.imagedata.data[f + 2] = c[e + d * qrcode.width] ? 255 : 0
		}
		a.putImageData(qrcode.imagedata, 0, 0)
	}
	var g = new Detector(c),
		h = g.detect();
	qrcode.debug && a.putImageData(qrcode.imagedata, 0, 0);
	for (var i = Decoder.decode(h.bits), j = i.DataByte, k = "", l = 0; j.length > l; l++) for (var m = 0; j[l].length > m; m++) k += String.fromCharCode(j[l][m]);
	var n = (new Date).getTime(),
		o = n - b;
	return console.log(o), qrcode.decode_utf8(k)
}, qrcode.getPixel = function (a, b) {
	if (a > qrcode.width) throw "point error";
	if (b > qrcode.height) throw "point error";
	return point = 4 * a + 4 * b * qrcode.width, p = (33 * qrcode.imagedata.data[point] + 34 * qrcode.imagedata.data[point + 1] + 33 * qrcode.imagedata.data[point + 2]) / 100
}, qrcode.binarize = function (a) {
	for (var b = Array(qrcode.width * qrcode.height), c = 0; qrcode.height > c; c++) for (var d = 0; qrcode.width > d; d++) {
			var e = qrcode.getPixel(d, c);
			b[d + c * qrcode.width] = a >= e ? !0 : !1
	}
	return b
}, qrcode._em = function (a) {
	for (var b = 4, c = Math.floor(qrcode.width / b), d = Math.floor(qrcode.height / b), e = Array(b), f = 0; b > f; f++) {
		e[f] = Array(b);
		for (var g = 0; b > g; g++) e[f][g] = Array(0, 0)
	}
	for (var h = 0; b > h; h++) for (var i = 0; b > i; i++) {
			e[i][h][0] = 255;
			for (var j = 0; d > j; j++) for (var k = 0; c > k; k++) {
					var l = a[c * i + k + (d * h + j) * qrcode.width];
					e[i][h][0] > l && (e[i][h][0] = l), l > e[i][h][1] && (e[i][h][1] = l)
			}
	}
	for (var m = Array(b), n = 0; b > n; n++) m[n] = Array(b);
	for (var h = 0; b > h; h++) for (var i = 0; b > i; i++) m[i][h] = Math.floor((e[i][h][0] + e[i][h][1]) / 2);
	return m
}, qrcode.grayScaleToBitmap = function (a) {
	for (var b = qrcode._em(a), c = b.length, d = Math.floor(qrcode.width / c), e = Math.floor(qrcode.height / c), f = Array(qrcode.height * qrcode.width), g = 0; c > g; g++) for (var h = 0; c > h; h++) for (var i = 0; e > i; i++) for (var j = 0; d > j; j++) f[d * h + j + (e * g + i) * qrcode.width] = a[d * h + j + (e * g + i) * qrcode.width] < b[h][g] ? !0 : !1;
	return f
}, qrcode.grayscale = function () {
	for (var a = Array(qrcode.width * qrcode.height), b = 0; qrcode.height > b; b++) for (var c = 0; qrcode.width > c; c++) {
			var d = qrcode.getPixel(c, b);
			a[c + b * qrcode.width] = d
	}
	return a
}, Array.prototype.remove = function (a, b) {
	var c = this.slice((b || a) + 1 || this.length);
	return this.length = 0 > a ? this.length + a : a, this.push.apply(this, c)
};
var _gf = 3,
	_eh = 57,
	_el = 8,
	_eg = 2;
qrcode._er = function (a) {
	function b(a, b) {
		return xDiff = a.X - b.X, yDiff = a.Y - b.Y, Math.sqrt(xDiff * xDiff + yDiff * yDiff)
	}
	function c(a, b, c) {
		var d = b.x,
			e = b.y;
		return (c.x - d) * (a.y - e) - (c.y - e) * (a.x - d)
	}
	var g, h, i, d = b(a[0], a[1]),
		e = b(a[1], a[2]),
		f = b(a[0], a[2]);
	if (e >= d && e >= f ? (h = a[0], g = a[1], i = a[2]) : f >= e && f >= d ? (h = a[1], g = a[0], i = a[2]) : (h = a[2], g = a[0], i = a[1]), 0 > c(g, h, i)) {
		var j = g;
		g = i, i = j
	}
	a[0] = g, a[1] = h, a[2] = i
};

