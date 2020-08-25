/*! jQuery v3.3.1 | (c) JS Foundation and other contributors | jquery.org/license */ ! function (e, t) {
  "use strict";
  "object" == typeof module && "object" == typeof module.exports ? module.exports = e.document ? t(e, !0) : function (e) {
    if (!e.document) throw new Error("jQuery requires a window with a document");
    return t(e)
  } : t(e)
}("undefined" != typeof window ? window : this, function (e, t) {
  "use strict";
  var n = [],
    r = e.document,
    i = Object.getPrototypeOf,
    o = n.slice,
    a = n.concat,
    s = n.push,
    u = n.indexOf,
    l = {},
    c = l.toString,
    f = l.hasOwnProperty,
    p = f.toString,
    d = p.call(Object),
    h = {},
    g = function e(t) {
      return "function" == typeof t && "number" != typeof t.nodeType
    },
    y = function e(t) {
      return null != t && t === t.window
    },
    v = {
      type: !0,
      src: !0,
      noModule: !0
    };

  function m(e, t, n) {
    var i, o = (t = t || r).createElement("script");
    if (o.text = e, n)
      for (i in v) n[i] && (o[i] = n[i]);
    t.head.appendChild(o).parentNode.removeChild(o)
  }

  function x(e) {
    return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? l[c.call(e)] || "object" : typeof e
  }
  var b = "3.3.1",
    w = function (e, t) {
      return new w.fn.init(e, t)
    },
    T = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
  w.fn = w.prototype = {
    jquery: "3.3.1",
    constructor: w,
    length: 0,
    toArray: function () {
      return o.call(this)
    },
    get: function (e) {
      return null == e ? o.call(this) : e < 0 ? this[e + this.length] : this[e]
    },
    pushStack: function (e) {
      var t = w.merge(this.constructor(), e);
      return t.prevObject = this, t
    },
    each: function (e) {
      return w.each(this, e)
    },
    map: function (e) {
      return this.pushStack(w.map(this, function (t, n) {
        return e.call(t, n, t)
      }))
    },
    slice: function () {
      return this.pushStack(o.apply(this, arguments))
    },
    first: function () {
      return this.eq(0)
    },
    last: function () {
      return this.eq(-1)
    },
    eq: function (e) {
      var t = this.length,
        n = +e + (e < 0 ? t : 0);
      return this.pushStack(n >= 0 && n < t ? [this[n]] : [])
    },
    end: function () {
      return this.prevObject || this.constructor()
    },
    push: s,
    sort: n.sort,
    splice: n.splice
  }, w.extend = w.fn.extend = function () {
    var e, t, n, r, i, o, a = arguments[0] || {},
      s = 1,
      u = arguments.length,
      l = !1;
    for ("boolean" == typeof a && (l = a, a = arguments[s] || {}, s++), "object" == typeof a || g(a) || (a = {}), s === u && (a = this, s--); s < u; s++)
      if (null != (e = arguments[s]))
        for (t in e) n = a[t], a !== (r = e[t]) && (l && r && (w.isPlainObject(r) || (i = Array.isArray(r))) ? (i ? (i = !1, o = n && Array.isArray(n) ? n : []) : o = n && w.isPlainObject(n) ? n : {}, a[t] = w.extend(l, o, r)) : void 0 !== r && (a[t] = r));
    return a
  }, w.extend({
    expando: "jQuery" + ("3.3.1" + Math.random()).replace(/\D/g, ""),
    isReady: !0,
    error: function (e) {
      throw new Error(e)
    },
    noop: function () {},
    isPlainObject: function (e) {
      var t, n;
      return !(!e || "[object Object]" !== c.call(e)) && (!(t = i(e)) || "function" == typeof (n = f.call(t, "constructor") && t.constructor) && p.call(n) === d)
    },
    isEmptyObject: function (e) {
      var t;
      for (t in e) return !1;
      return !0
    },
    globalEval: function (e) {
      m(e)
    },
    each: function (e, t) {
      var n, r = 0;
      if (C(e)) {
        for (n = e.length; r < n; r++)
          if (!1 === t.call(e[r], r, e[r])) break
      } else
        for (r in e)
          if (!1 === t.call(e[r], r, e[r])) break;
      return e
    },
    trim: function (e) {
      return null == e ? "" : (e + "").replace(T, "")
    },
    makeArray: function (e, t) {
      var n = t || [];
      return null != e && (C(Object(e)) ? w.merge(n, "string" == typeof e ? [e] : e) : s.call(n, e)), n
    },
    inArray: function (e, t, n) {
      return null == t ? -1 : u.call(t, e, n)
    },
    merge: function (e, t) {
      for (var n = +t.length, r = 0, i = e.length; r < n; r++) e[i++] = t[r];
      return e.length = i, e
    },
    grep: function (e, t, n) {
      for (var r, i = [], o = 0, a = e.length, s = !n; o < a; o++)(r = !t(e[o], o)) !== s && i.push(e[o]);
      return i
    },
    map: function (e, t, n) {
      var r, i, o = 0,
        s = [];
      if (C(e))
        for (r = e.length; o < r; o++) null != (i = t(e[o], o, n)) && s.push(i);
      else
        for (o in e) null != (i = t(e[o], o, n)) && s.push(i);
      return a.apply([], s)
    },
    guid: 1,
    support: h
  }), "function" == typeof Symbol && (w.fn[Symbol.iterator] = n[Symbol.iterator]), w.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function (e, t) {
    l["[object " + t + "]"] = t.toLowerCase()
  });

  function C(e) {
    var t = !!e && "length" in e && e.length,
      n = x(e);
    return !g(e) && !y(e) && ("array" === n || 0 === t || "number" == typeof t && t > 0 && t - 1 in e)
  }
  var E = function (e) {
    var t, n, r, i, o, a, s, u, l, c, f, p, d, h, g, y, v, m, x, b = "sizzle" + 1 * new Date,
      w = e.document,
      T = 0,
      C = 0,
      E = ae(),
      k = ae(),
      S = ae(),
      D = function (e, t) {
        return e === t && (f = !0), 0
      },
      N = {}.hasOwnProperty,
      A = [],
      j = A.pop,
      q = A.push,
      L = A.push,
      H = A.slice,
      O = function (e, t) {
        for (var n = 0, r = e.length; n < r; n++)
          if (e[n] === t) return n;
        return -1
      },
      P = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
      M = "[\\x20\\t\\r\\n\\f]",
      R = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+",
      I = "\\[" + M + "*(" + R + ")(?:" + M + "*([*^$|!~]?=)" + M + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + R + "))|)" + M + "*\\]",
      W = ":(" + R + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + I + ")*)|.*)\\)|)",
      $ = new RegExp(M + "+", "g"),
      B = new RegExp("^" + M + "+|((?:^|[^\\\\])(?:\\\\.)*)" + M + "+$", "g"),
      F = new RegExp("^" + M + "*," + M + "*"),
      _ = new RegExp("^" + M + "*([>+~]|" + M + ")" + M + "*"),
      z = new RegExp("=" + M + "*([^\\]'\"]*?)" + M + "*\\]", "g"),
      X = new RegExp(W),
      U = new RegExp("^" + R + "$"),
      V = {
        ID: new RegExp("^#(" + R + ")"),
        CLASS: new RegExp("^\\.(" + R + ")"),
        TAG: new RegExp("^(" + R + "|[*])"),
        ATTR: new RegExp("^" + I),
        PSEUDO: new RegExp("^" + W),
        CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + M + "*(even|odd|(([+-]|)(\\d*)n|)" + M + "*(?:([+-]|)" + M + "*(\\d+)|))" + M + "*\\)|)", "i"),
        bool: new RegExp("^(?:" + P + ")$", "i"),
        needsContext: new RegExp("^" + M + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + M + "*((?:-\\d)?\\d*)" + M + "*\\)|)(?=[^-]|$)", "i")
      },
      G = /^(?:input|select|textarea|button)$/i,
      Y = /^h\d$/i,
      Q = /^[^{]+\{\s*\[native \w/,
      J = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
      K = /[+~]/,
      Z = new RegExp("\\\\([\\da-f]{1,6}" + M + "?|(" + M + ")|.)", "ig"),
      ee = function (e, t, n) {
        var r = "0x" + t - 65536;
        return r !== r || n ? t : r < 0 ? String.fromCharCode(r + 65536) : String.fromCharCode(r >> 10 | 55296, 1023 & r | 56320)
      },
      te = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
      ne = function (e, t) {
        return t ? "\0" === e ? "\ufffd" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e
      },
      re = function () {
        p()
      },
      ie = me(function (e) {
        return !0 === e.disabled && ("form" in e || "label" in e)
      }, {
        dir: "parentNode",
        next: "legend"
      });
    try {
      L.apply(A = H.call(w.childNodes), w.childNodes), A[w.childNodes.length].nodeType
    } catch (e) {
      L = {
        apply: A.length ? function (e, t) {
          q.apply(e, H.call(t))
        } : function (e, t) {
          var n = e.length,
            r = 0;
          while (e[n++] = t[r++]);
          e.length = n - 1
        }
      }
    }

    function oe(e, t, r, i) {
      var o, s, l, c, f, h, v, m = t && t.ownerDocument,
        T = t ? t.nodeType : 9;
      if (r = r || [], "string" != typeof e || !e || 1 !== T && 9 !== T && 11 !== T) return r;
      if (!i && ((t ? t.ownerDocument || t : w) !== d && p(t), t = t || d, g)) {
        if (11 !== T && (f = J.exec(e)))
          if (o = f[1]) {
            if (9 === T) {
              if (!(l = t.getElementById(o))) return r;
              if (l.id === o) return r.push(l), r
            } else if (m && (l = m.getElementById(o)) && x(t, l) && l.id === o) return r.push(l), r
          } else {
            if (f[2]) return L.apply(r, t.getElementsByTagName(e)), r;
            if ((o = f[3]) && n.getElementsByClassName && t.getElementsByClassName) return L.apply(r, t.getElementsByClassName(o)), r
          } if (n.qsa && !S[e + " "] && (!y || !y.test(e))) {
          if (1 !== T) m = t, v = e;
          else if ("object" !== t.nodeName.toLowerCase()) {
            (c = t.getAttribute("id")) ? c = c.replace(te, ne): t.setAttribute("id", c = b), s = (h = a(e)).length;
            while (s--) h[s] = "#" + c + " " + ve(h[s]);
            v = h.join(","), m = K.test(e) && ge(t.parentNode) || t
          }
          if (v) try {
            return L.apply(r, m.querySelectorAll(v)), r
          } catch (e) {} finally {
            c === b && t.removeAttribute("id")
          }
        }
      }
      return u(e.replace(B, "$1"), t, r, i)
    }

    function ae() {
      var e = [];

      function t(n, i) {
        return e.push(n + " ") > r.cacheLength && delete t[e.shift()], t[n + " "] = i
      }
      return t
    }

    function se(e) {
      return e[b] = !0, e
    }

    function ue(e) {
      var t = d.createElement("fieldset");
      try {
        return !!e(t)
      } catch (e) {
        return !1
      } finally {
        t.parentNode && t.parentNode.removeChild(t), t = null
      }
    }

    function le(e, t) {
      var n = e.split("|"),
        i = n.length;
      while (i--) r.attrHandle[n[i]] = t
    }

    function ce(e, t) {
      var n = t && e,
        r = n && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex;
      if (r) return r;
      if (n)
        while (n = n.nextSibling)
          if (n === t) return -1;
      return e ? 1 : -1
    }

    function fe(e) {
      return function (t) {
        return "input" === t.nodeName.toLowerCase() && t.type === e
      }
    }

    function pe(e) {
      return function (t) {
        var n = t.nodeName.toLowerCase();
        return ("input" === n || "button" === n) && t.type === e
      }
    }

    function de(e) {
      return function (t) {
        return "form" in t ? t.parentNode && !1 === t.disabled ? "label" in t ? "label" in t.parentNode ? t.parentNode.disabled === e : t.disabled === e : t.isDisabled === e || t.isDisabled !== !e && ie(t) === e : t.disabled === e : "label" in t && t.disabled === e
      }
    }

    function he(e) {
      return se(function (t) {
        return t = +t, se(function (n, r) {
          var i, o = e([], n.length, t),
            a = o.length;
          while (a--) n[i = o[a]] && (n[i] = !(r[i] = n[i]))
        })
      })
    }

    function ge(e) {
      return e && "undefined" != typeof e.getElementsByTagName && e
    }
    n = oe.support = {}, o = oe.isXML = function (e) {
      var t = e && (e.ownerDocument || e).documentElement;
      return !!t && "HTML" !== t.nodeName
    }, p = oe.setDocument = function (e) {
      var t, i, a = e ? e.ownerDocument || e : w;
      return a !== d && 9 === a.nodeType && a.documentElement ? (d = a, h = d.documentElement, g = !o(d), w !== d && (i = d.defaultView) && i.top !== i && (i.addEventListener ? i.addEventListener("unload", re, !1) : i.attachEvent && i.attachEvent("onunload", re)), n.attributes = ue(function (e) {
        return e.className = "i", !e.getAttribute("className")
      }), n.getElementsByTagName = ue(function (e) {
        return e.appendChild(d.createComment("")), !e.getElementsByTagName("*").length
      }), n.getElementsByClassName = Q.test(d.getElementsByClassName), n.getById = ue(function (e) {
        return h.appendChild(e).id = b, !d.getElementsByName || !d.getElementsByName(b).length
      }), n.getById ? (r.filter.ID = function (e) {
        var t = e.replace(Z, ee);
        return function (e) {
          return e.getAttribute("id") === t
        }
      }, r.find.ID = function (e, t) {
        if ("undefined" != typeof t.getElementById && g) {
          var n = t.getElementById(e);
          return n ? [n] : []
        }
      }) : (r.filter.ID = function (e) {
        var t = e.replace(Z, ee);
        return function (e) {
          var n = "undefined" != typeof e.getAttributeNode && e.getAttributeNode("id");
          return n && n.value === t
        }
      }, r.find.ID = function (e, t) {
        if ("undefined" != typeof t.getElementById && g) {
          var n, r, i, o = t.getElementById(e);
          if (o) {
            if ((n = o.getAttributeNode("id")) && n.value === e) return [o];
            i = t.getElementsByName(e), r = 0;
            while (o = i[r++])
              if ((n = o.getAttributeNode("id")) && n.value === e) return [o]
          }
          return []
        }
      }), r.find.TAG = n.getElementsByTagName ? function (e, t) {
        return "undefined" != typeof t.getElementsByTagName ? t.getElementsByTagName(e) : n.qsa ? t.querySelectorAll(e) : void 0
      } : function (e, t) {
        var n, r = [],
          i = 0,
          o = t.getElementsByTagName(e);
        if ("*" === e) {
          while (n = o[i++]) 1 === n.nodeType && r.push(n);
          return r
        }
        return o
      }, r.find.CLASS = n.getElementsByClassName && function (e, t) {
        if ("undefined" != typeof t.getElementsByClassName && g) return t.getElementsByClassName(e)
      }, v = [], y = [], (n.qsa = Q.test(d.querySelectorAll)) && (ue(function (e) {
        h.appendChild(e).innerHTML = "<a id='" + b + "'></a><select id='" + b + "-\r\\' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && y.push("[*^$]=" + M + "*(?:''|\"\")"), e.querySelectorAll("[selected]").length || y.push("\\[" + M + "*(?:value|" + P + ")"), e.querySelectorAll("[id~=" + b + "-]").length || y.push("~="), e.querySelectorAll(":checked").length || y.push(":checked"), e.querySelectorAll("a#" + b + "+*").length || y.push(".#.+[+~]")
      }), ue(function (e) {
        e.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
        var t = d.createElement("input");
        t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && y.push("name" + M + "*[*^$|!~]?="), 2 !== e.querySelectorAll(":enabled").length && y.push(":enabled", ":disabled"), h.appendChild(e).disabled = !0, 2 !== e.querySelectorAll(":disabled").length && y.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), y.push(",.*:")
      })), (n.matchesSelector = Q.test(m = h.matches || h.webkitMatchesSelector || h.mozMatchesSelector || h.oMatchesSelector || h.msMatchesSelector)) && ue(function (e) {
        n.disconnectedMatch = m.call(e, "*"), m.call(e, "[s!='']:x"), v.push("!=", W)
      }), y = y.length && new RegExp(y.join("|")), v = v.length && new RegExp(v.join("|")), t = Q.test(h.compareDocumentPosition), x = t || Q.test(h.contains) ? function (e, t) {
        var n = 9 === e.nodeType ? e.documentElement : e,
          r = t && t.parentNode;
        return e === r || !(!r || 1 !== r.nodeType || !(n.contains ? n.contains(r) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(r)))
      } : function (e, t) {
        if (t)
          while (t = t.parentNode)
            if (t === e) return !0;
        return !1
      }, D = t ? function (e, t) {
        if (e === t) return f = !0, 0;
        var r = !e.compareDocumentPosition - !t.compareDocumentPosition;
        return r || (1 & (r = (e.ownerDocument || e) === (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1) || !n.sortDetached && t.compareDocumentPosition(e) === r ? e === d || e.ownerDocument === w && x(w, e) ? -1 : t === d || t.ownerDocument === w && x(w, t) ? 1 : c ? O(c, e) - O(c, t) : 0 : 4 & r ? -1 : 1)
      } : function (e, t) {
        if (e === t) return f = !0, 0;
        var n, r = 0,
          i = e.parentNode,
          o = t.parentNode,
          a = [e],
          s = [t];
        if (!i || !o) return e === d ? -1 : t === d ? 1 : i ? -1 : o ? 1 : c ? O(c, e) - O(c, t) : 0;
        if (i === o) return ce(e, t);
        n = e;
        while (n = n.parentNode) a.unshift(n);
        n = t;
        while (n = n.parentNode) s.unshift(n);
        while (a[r] === s[r]) r++;
        return r ? ce(a[r], s[r]) : a[r] === w ? -1 : s[r] === w ? 1 : 0
      }, d) : d
    }, oe.matches = function (e, t) {
      return oe(e, null, null, t)
    }, oe.matchesSelector = function (e, t) {
      if ((e.ownerDocument || e) !== d && p(e), t = t.replace(z, "='$1']"), n.matchesSelector && g && !S[t + " "] && (!v || !v.test(t)) && (!y || !y.test(t))) try {
        var r = m.call(e, t);
        if (r || n.disconnectedMatch || e.document && 11 !== e.document.nodeType) return r
      } catch (e) {}
      return oe(t, d, null, [e]).length > 0
    }, oe.contains = function (e, t) {
      return (e.ownerDocument || e) !== d && p(e), x(e, t)
    }, oe.attr = function (e, t) {
      (e.ownerDocument || e) !== d && p(e);
      var i = r.attrHandle[t.toLowerCase()],
        o = i && N.call(r.attrHandle, t.toLowerCase()) ? i(e, t, !g) : void 0;
      return void 0 !== o ? o : n.attributes || !g ? e.getAttribute(t) : (o = e.getAttributeNode(t)) && o.specified ? o.value : null
    }, oe.escape = function (e) {
      return (e + "").replace(te, ne)
    }, oe.error = function (e) {
      throw new Error("Syntax error, unrecognized expression: " + e)
    }, oe.uniqueSort = function (e) {
      var t, r = [],
        i = 0,
        o = 0;
      if (f = !n.detectDuplicates, c = !n.sortStable && e.slice(0), e.sort(D), f) {
        while (t = e[o++]) t === e[o] && (i = r.push(o));
        while (i--) e.splice(r[i], 1)
      }
      return c = null, e
    }, i = oe.getText = function (e) {
      var t, n = "",
        r = 0,
        o = e.nodeType;
      if (o) {
        if (1 === o || 9 === o || 11 === o) {
          if ("string" == typeof e.textContent) return e.textContent;
          for (e = e.firstChild; e; e = e.nextSibling) n += i(e)
        } else if (3 === o || 4 === o) return e.nodeValue
      } else
        while (t = e[r++]) n += i(t);
      return n
    }, (r = oe.selectors = {
      cacheLength: 50,
      createPseudo: se,
      match: V,
      attrHandle: {},
      find: {},
      relative: {
        ">": {
          dir: "parentNode",
          first: !0
        },
        " ": {
          dir: "parentNode"
        },
        "+": {
          dir: "previousSibling",
          first: !0
        },
        "~": {
          dir: "previousSibling"
        }
      },
      preFilter: {
        ATTR: function (e) {
          return e[1] = e[1].replace(Z, ee), e[3] = (e[3] || e[4] || e[5] || "").replace(Z, ee), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4)
        },
        CHILD: function (e) {
          return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || oe.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && oe.error(e[0]), e
        },
        PSEUDO: function (e) {
          var t, n = !e[6] && e[2];
          return V.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && X.test(n) && (t = a(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[2] = n.slice(0, t)), e.slice(0, 3))
        }
      },
      filter: {
        TAG: function (e) {
          var t = e.replace(Z, ee).toLowerCase();
          return "*" === e ? function () {
            return !0
          } : function (e) {
            return e.nodeName && e.nodeName.toLowerCase() === t
          }
        },
        CLASS: function (e) {
          var t = E[e + " "];
          return t || (t = new RegExp("(^|" + M + ")" + e + "(" + M + "|$)")) && E(e, function (e) {
            return t.test("string" == typeof e.className && e.className || "undefined" != typeof e.getAttribute && e.getAttribute("class") || "")
          })
        },
        ATTR: function (e, t, n) {
          return function (r) {
            var i = oe.attr(r, e);
            return null == i ? "!=" === t : !t || (i += "", "=" === t ? i === n : "!=" === t ? i !== n : "^=" === t ? n && 0 === i.indexOf(n) : "*=" === t ? n && i.indexOf(n) > -1 : "$=" === t ? n && i.slice(-n.length) === n : "~=" === t ? (" " + i.replace($, " ") + " ").indexOf(n) > -1 : "|=" === t && (i === n || i.slice(0, n.length + 1) === n + "-"))
          }
        },
        CHILD: function (e, t, n, r, i) {
          var o = "nth" !== e.slice(0, 3),
            a = "last" !== e.slice(-4),
            s = "of-type" === t;
          return 1 === r && 0 === i ? function (e) {
            return !!e.parentNode
          } : function (t, n, u) {
            var l, c, f, p, d, h, g = o !== a ? "nextSibling" : "previousSibling",
              y = t.parentNode,
              v = s && t.nodeName.toLowerCase(),
              m = !u && !s,
              x = !1;
            if (y) {
              if (o) {
                while (g) {
                  p = t;
                  while (p = p[g])
                    if (s ? p.nodeName.toLowerCase() === v : 1 === p.nodeType) return !1;
                  h = g = "only" === e && !h && "nextSibling"
                }
                return !0
              }
              if (h = [a ? y.firstChild : y.lastChild], a && m) {
                x = (d = (l = (c = (f = (p = y)[b] || (p[b] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] || [])[0] === T && l[1]) && l[2], p = d && y.childNodes[d];
                while (p = ++d && p && p[g] || (x = d = 0) || h.pop())
                  if (1 === p.nodeType && ++x && p === t) {
                    c[e] = [T, d, x];
                    break
                  }
              } else if (m && (x = d = (l = (c = (f = (p = t)[b] || (p[b] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] || [])[0] === T && l[1]), !1 === x)
                while (p = ++d && p && p[g] || (x = d = 0) || h.pop())
                  if ((s ? p.nodeName.toLowerCase() === v : 1 === p.nodeType) && ++x && (m && ((c = (f = p[b] || (p[b] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] = [T, x]), p === t)) break;
              return (x -= i) === r || x % r == 0 && x / r >= 0
            }
          }
        },
        PSEUDO: function (e, t) {
          var n, i = r.pseudos[e] || r.setFilters[e.toLowerCase()] || oe.error("unsupported pseudo: " + e);
          return i[b] ? i(t) : i.length > 1 ? (n = [e, e, "", t], r.setFilters.hasOwnProperty(e.toLowerCase()) ? se(function (e, n) {
            var r, o = i(e, t),
              a = o.length;
            while (a--) e[r = O(e, o[a])] = !(n[r] = o[a])
          }) : function (e) {
            return i(e, 0, n)
          }) : i
        }
      },
      pseudos: {
        not: se(function (e) {
          var t = [],
            n = [],
            r = s(e.replace(B, "$1"));
          return r[b] ? se(function (e, t, n, i) {
            var o, a = r(e, null, i, []),
              s = e.length;
            while (s--)(o = a[s]) && (e[s] = !(t[s] = o))
          }) : function (e, i, o) {
            return t[0] = e, r(t, null, o, n), t[0] = null, !n.pop()
          }
        }),
        has: se(function (e) {
          return function (t) {
            return oe(e, t).length > 0
          }
        }),
        contains: se(function (e) {
          return e = e.replace(Z, ee),
            function (t) {
              return (t.textContent || t.innerText || i(t)).indexOf(e) > -1
            }
        }),
        lang: se(function (e) {
          return U.test(e || "") || oe.error("unsupported lang: " + e), e = e.replace(Z, ee).toLowerCase(),
            function (t) {
              var n;
              do {
                if (n = g ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang")) return (n = n.toLowerCase()) === e || 0 === n.indexOf(e + "-")
              } while ((t = t.parentNode) && 1 === t.nodeType);
              return !1
            }
        }),
        target: function (t) {
          var n = e.location && e.location.hash;
          return n && n.slice(1) === t.id
        },
        root: function (e) {
          return e === h
        },
        focus: function (e) {
          return e === d.activeElement && (!d.hasFocus || d.hasFocus()) && !!(e.type || e.href || ~e.tabIndex)
        },
        enabled: de(!1),
        disabled: de(!0),
        checked: function (e) {
          var t = e.nodeName.toLowerCase();
          return "input" === t && !!e.checked || "option" === t && !!e.selected
        },
        selected: function (e) {
          return e.parentNode && e.parentNode.selectedIndex, !0 === e.selected
        },
        empty: function (e) {
          for (e = e.firstChild; e; e = e.nextSibling)
            if (e.nodeType < 6) return !1;
          return !0
        },
        parent: function (e) {
          return !r.pseudos.empty(e)
        },
        header: function (e) {
          return Y.test(e.nodeName)
        },
        input: function (e) {
          return G.test(e.nodeName)
        },
        button: function (e) {
          var t = e.nodeName.toLowerCase();
          return "input" === t && "button" === e.type || "button" === t
        },
        text: function (e) {
          var t;
          return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase())
        },
        first: he(function () {
          return [0]
        }),
        last: he(function (e, t) {
          return [t - 1]
        }),
        eq: he(function (e, t, n) {
          return [n < 0 ? n + t : n]
        }),
        even: he(function (e, t) {
          for (var n = 0; n < t; n += 2) e.push(n);
          return e
        }),
        odd: he(function (e, t) {
          for (var n = 1; n < t; n += 2) e.push(n);
          return e
        }),
        lt: he(function (e, t, n) {
          for (var r = n < 0 ? n + t : n; --r >= 0;) e.push(r);
          return e
        }),
        gt: he(function (e, t, n) {
          for (var r = n < 0 ? n + t : n; ++r < t;) e.push(r);
          return e
        })
      }
    }).pseudos.nth = r.pseudos.eq;
    for (t in {
        radio: !0,
        checkbox: !0,
        file: !0,
        password: !0,
        image: !0
      }) r.pseudos[t] = fe(t);
    for (t in {
        submit: !0,
        reset: !0
      }) r.pseudos[t] = pe(t);

    function ye() {}
    ye.prototype = r.filters = r.pseudos, r.setFilters = new ye, a = oe.tokenize = function (e, t) {
      var n, i, o, a, s, u, l, c = k[e + " "];
      if (c) return t ? 0 : c.slice(0);
      s = e, u = [], l = r.preFilter;
      while (s) {
        n && !(i = F.exec(s)) || (i && (s = s.slice(i[0].length) || s), u.push(o = [])), n = !1, (i = _.exec(s)) && (n = i.shift(), o.push({
          value: n,
          type: i[0].replace(B, " ")
        }), s = s.slice(n.length));
        for (a in r.filter) !(i = V[a].exec(s)) || l[a] && !(i = l[a](i)) || (n = i.shift(), o.push({
          value: n,
          type: a,
          matches: i
        }), s = s.slice(n.length));
        if (!n) break
      }
      return t ? s.length : s ? oe.error(e) : k(e, u).slice(0)
    };

    function ve(e) {
      for (var t = 0, n = e.length, r = ""; t < n; t++) r += e[t].value;
      return r
    }

    function me(e, t, n) {
      var r = t.dir,
        i = t.next,
        o = i || r,
        a = n && "parentNode" === o,
        s = C++;
      return t.first ? function (t, n, i) {
        while (t = t[r])
          if (1 === t.nodeType || a) return e(t, n, i);
        return !1
      } : function (t, n, u) {
        var l, c, f, p = [T, s];
        if (u) {
          while (t = t[r])
            if ((1 === t.nodeType || a) && e(t, n, u)) return !0
        } else
          while (t = t[r])
            if (1 === t.nodeType || a)
              if (f = t[b] || (t[b] = {}), c = f[t.uniqueID] || (f[t.uniqueID] = {}), i && i === t.nodeName.toLowerCase()) t = t[r] || t;
              else {
                if ((l = c[o]) && l[0] === T && l[1] === s) return p[2] = l[2];
                if (c[o] = p, p[2] = e(t, n, u)) return !0
              } return !1
      }
    }

    function xe(e) {
      return e.length > 1 ? function (t, n, r) {
        var i = e.length;
        while (i--)
          if (!e[i](t, n, r)) return !1;
        return !0
      } : e[0]
    }

    function be(e, t, n) {
      for (var r = 0, i = t.length; r < i; r++) oe(e, t[r], n);
      return n
    }

    function we(e, t, n, r, i) {
      for (var o, a = [], s = 0, u = e.length, l = null != t; s < u; s++)(o = e[s]) && (n && !n(o, r, i) || (a.push(o), l && t.push(s)));
      return a
    }

    function Te(e, t, n, r, i, o) {
      return r && !r[b] && (r = Te(r)), i && !i[b] && (i = Te(i, o)), se(function (o, a, s, u) {
        var l, c, f, p = [],
          d = [],
          h = a.length,
          g = o || be(t || "*", s.nodeType ? [s] : s, []),
          y = !e || !o && t ? g : we(g, p, e, s, u),
          v = n ? i || (o ? e : h || r) ? [] : a : y;
        if (n && n(y, v, s, u), r) {
          l = we(v, d), r(l, [], s, u), c = l.length;
          while (c--)(f = l[c]) && (v[d[c]] = !(y[d[c]] = f))
        }
        if (o) {
          if (i || e) {
            if (i) {
              l = [], c = v.length;
              while (c--)(f = v[c]) && l.push(y[c] = f);
              i(null, v = [], l, u)
            }
            c = v.length;
            while (c--)(f = v[c]) && (l = i ? O(o, f) : p[c]) > -1 && (o[l] = !(a[l] = f))
          }
        } else v = we(v === a ? v.splice(h, v.length) : v), i ? i(null, a, v, u) : L.apply(a, v)
      })
    }

    function Ce(e) {
      for (var t, n, i, o = e.length, a = r.relative[e[0].type], s = a || r.relative[" "], u = a ? 1 : 0, c = me(function (e) {
          return e === t
        }, s, !0), f = me(function (e) {
          return O(t, e) > -1
        }, s, !0), p = [function (e, n, r) {
          var i = !a && (r || n !== l) || ((t = n).nodeType ? c(e, n, r) : f(e, n, r));
          return t = null, i
        }]; u < o; u++)
        if (n = r.relative[e[u].type]) p = [me(xe(p), n)];
        else {
          if ((n = r.filter[e[u].type].apply(null, e[u].matches))[b]) {
            for (i = ++u; i < o; i++)
              if (r.relative[e[i].type]) break;
            return Te(u > 1 && xe(p), u > 1 && ve(e.slice(0, u - 1).concat({
              value: " " === e[u - 2].type ? "*" : ""
            })).replace(B, "$1"), n, u < i && Ce(e.slice(u, i)), i < o && Ce(e = e.slice(i)), i < o && ve(e))
          }
          p.push(n)
        } return xe(p)
    }

    function Ee(e, t) {
      var n = t.length > 0,
        i = e.length > 0,
        o = function (o, a, s, u, c) {
          var f, h, y, v = 0,
            m = "0",
            x = o && [],
            b = [],
            w = l,
            C = o || i && r.find.TAG("*", c),
            E = T += null == w ? 1 : Math.random() || .1,
            k = C.length;
          for (c && (l = a === d || a || c); m !== k && null != (f = C[m]); m++) {
            if (i && f) {
              h = 0, a || f.ownerDocument === d || (p(f), s = !g);
              while (y = e[h++])
                if (y(f, a || d, s)) {
                  u.push(f);
                  break
                } c && (T = E)
            }
            n && ((f = !y && f) && v--, o && x.push(f))
          }
          if (v += m, n && m !== v) {
            h = 0;
            while (y = t[h++]) y(x, b, a, s);
            if (o) {
              if (v > 0)
                while (m--) x[m] || b[m] || (b[m] = j.call(u));
              b = we(b)
            }
            L.apply(u, b), c && !o && b.length > 0 && v + t.length > 1 && oe.uniqueSort(u)
          }
          return c && (T = E, l = w), x
        };
      return n ? se(o) : o
    }
    return s = oe.compile = function (e, t) {
      var n, r = [],
        i = [],
        o = S[e + " "];
      if (!o) {
        t || (t = a(e)), n = t.length;
        while (n--)(o = Ce(t[n]))[b] ? r.push(o) : i.push(o);
        (o = S(e, Ee(i, r))).selector = e
      }
      return o
    }, u = oe.select = function (e, t, n, i) {
      var o, u, l, c, f, p = "function" == typeof e && e,
        d = !i && a(e = p.selector || e);
      if (n = n || [], 1 === d.length) {
        if ((u = d[0] = d[0].slice(0)).length > 2 && "ID" === (l = u[0]).type && 9 === t.nodeType && g && r.relative[u[1].type]) {
          if (!(t = (r.find.ID(l.matches[0].replace(Z, ee), t) || [])[0])) return n;
          p && (t = t.parentNode), e = e.slice(u.shift().value.length)
        }
        o = V.needsContext.test(e) ? 0 : u.length;
        while (o--) {
          if (l = u[o], r.relative[c = l.type]) break;
          if ((f = r.find[c]) && (i = f(l.matches[0].replace(Z, ee), K.test(u[0].type) && ge(t.parentNode) || t))) {
            if (u.splice(o, 1), !(e = i.length && ve(u))) return L.apply(n, i), n;
            break
          }
        }
      }
      return (p || s(e, d))(i, t, !g, n, !t || K.test(e) && ge(t.parentNode) || t), n
    }, n.sortStable = b.split("").sort(D).join("") === b, n.detectDuplicates = !!f, p(), n.sortDetached = ue(function (e) {
      return 1 & e.compareDocumentPosition(d.createElement("fieldset"))
    }), ue(function (e) {
      return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href")
    }) || le("type|href|height|width", function (e, t, n) {
      if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2)
    }), n.attributes && ue(function (e) {
      return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value")
    }) || le("value", function (e, t, n) {
      if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue
    }), ue(function (e) {
      return null == e.getAttribute("disabled")
    }) || le(P, function (e, t, n) {
      var r;
      if (!n) return !0 === e[t] ? t.toLowerCase() : (r = e.getAttributeNode(t)) && r.specified ? r.value : null
    }), oe
  }(e);
  w.find = E, w.expr = E.selectors, w.expr[":"] = w.expr.pseudos, w.uniqueSort = w.unique = E.uniqueSort, w.text = E.getText, w.isXMLDoc = E.isXML, w.contains = E.contains, w.escapeSelector = E.escape;
  var k = function (e, t, n) {
      var r = [],
        i = void 0 !== n;
      while ((e = e[t]) && 9 !== e.nodeType)
        if (1 === e.nodeType) {
          if (i && w(e).is(n)) break;
          r.push(e)
        } return r
    },
    S = function (e, t) {
      for (var n = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && n.push(e);
      return n
    },
    D = w.expr.match.needsContext;

  function N(e, t) {
    return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase()
  }
  var A = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;

  function j(e, t, n) {
    return g(t) ? w.grep(e, function (e, r) {
      return !!t.call(e, r, e) !== n
    }) : t.nodeType ? w.grep(e, function (e) {
      return e === t !== n
    }) : "string" != typeof t ? w.grep(e, function (e) {
      return u.call(t, e) > -1 !== n
    }) : w.filter(t, e, n)
  }
  w.filter = function (e, t, n) {
    var r = t[0];
    return n && (e = ":not(" + e + ")"), 1 === t.length && 1 === r.nodeType ? w.find.matchesSelector(r, e) ? [r] : [] : w.find.matches(e, w.grep(t, function (e) {
      return 1 === e.nodeType
    }))
  }, w.fn.extend({
    find: function (e) {
      var t, n, r = this.length,
        i = this;
      if ("string" != typeof e) return this.pushStack(w(e).filter(function () {
        for (t = 0; t < r; t++)
          if (w.contains(i[t], this)) return !0
      }));
      for (n = this.pushStack([]), t = 0; t < r; t++) w.find(e, i[t], n);
      return r > 1 ? w.uniqueSort(n) : n
    },
    filter: function (e) {
      return this.pushStack(j(this, e || [], !1))
    },
    not: function (e) {
      return this.pushStack(j(this, e || [], !0))
    },
    is: function (e) {
      return !!j(this, "string" == typeof e && D.test(e) ? w(e) : e || [], !1).length
    }
  });
  var q, L = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
  (w.fn.init = function (e, t, n) {
    var i, o;
    if (!e) return this;
    if (n = n || q, "string" == typeof e) {
      if (!(i = "<" === e[0] && ">" === e[e.length - 1] && e.length >= 3 ? [null, e, null] : L.exec(e)) || !i[1] && t) return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);
      if (i[1]) {
        if (t = t instanceof w ? t[0] : t, w.merge(this, w.parseHTML(i[1], t && t.nodeType ? t.ownerDocument || t : r, !0)), A.test(i[1]) && w.isPlainObject(t))
          for (i in t) g(this[i]) ? this[i](t[i]) : this.attr(i, t[i]);
        return this
      }
      return (o = r.getElementById(i[2])) && (this[0] = o, this.length = 1), this
    }
    return e.nodeType ? (this[0] = e, this.length = 1, this) : g(e) ? void 0 !== n.ready ? n.ready(e) : e(w) : w.makeArray(e, this)
  }).prototype = w.fn, q = w(r);
  var H = /^(?:parents|prev(?:Until|All))/,
    O = {
      children: !0,
      contents: !0,
      next: !0,
      prev: !0
    };
  w.fn.extend({
    has: function (e) {
      var t = w(e, this),
        n = t.length;
      return this.filter(function () {
        for (var e = 0; e < n; e++)
          if (w.contains(this, t[e])) return !0
      })
    },
    closest: function (e, t) {
      var n, r = 0,
        i = this.length,
        o = [],
        a = "string" != typeof e && w(e);
      if (!D.test(e))
        for (; r < i; r++)
          for (n = this[r]; n && n !== t; n = n.parentNode)
            if (n.nodeType < 11 && (a ? a.index(n) > -1 : 1 === n.nodeType && w.find.matchesSelector(n, e))) {
              o.push(n);
              break
            } return this.pushStack(o.length > 1 ? w.uniqueSort(o) : o)
    },
    index: function (e) {
      return e ? "string" == typeof e ? u.call(w(e), this[0]) : u.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
    },
    add: function (e, t) {
      return this.pushStack(w.uniqueSort(w.merge(this.get(), w(e, t))))
    },
    addBack: function (e) {
      return this.add(null == e ? this.prevObject : this.prevObject.filter(e))
    }
  });

  function P(e, t) {
    while ((e = e[t]) && 1 !== e.nodeType);
    return e
  }
  w.each({
    parent: function (e) {
      var t = e.parentNode;
      return t && 11 !== t.nodeType ? t : null
    },
    parents: function (e) {
      return k(e, "parentNode")
    },
    parentsUntil: function (e, t, n) {
      return k(e, "parentNode", n)
    },
    next: function (e) {
      return P(e, "nextSibling")
    },
    prev: function (e) {
      return P(e, "previousSibling")
    },
    nextAll: function (e) {
      return k(e, "nextSibling")
    },
    prevAll: function (e) {
      return k(e, "previousSibling")
    },
    nextUntil: function (e, t, n) {
      return k(e, "nextSibling", n)
    },
    prevUntil: function (e, t, n) {
      return k(e, "previousSibling", n)
    },
    siblings: function (e) {
      return S((e.parentNode || {}).firstChild, e)
    },
    children: function (e) {
      return S(e.firstChild)
    },
    contents: function (e) {
      return N(e, "iframe") ? e.contentDocument : (N(e, "template") && (e = e.content || e), w.merge([], e.childNodes))
    }
  }, function (e, t) {
    w.fn[e] = function (n, r) {
      var i = w.map(this, t, n);
      return "Until" !== e.slice(-5) && (r = n), r && "string" == typeof r && (i = w.filter(r, i)), this.length > 1 && (O[e] || w.uniqueSort(i), H.test(e) && i.reverse()), this.pushStack(i)
    }
  });
  var M = /[^\x20\t\r\n\f]+/g;

  function R(e) {
    var t = {};
    return w.each(e.match(M) || [], function (e, n) {
      t[n] = !0
    }), t
  }
  w.Callbacks = function (e) {
    e = "string" == typeof e ? R(e) : w.extend({}, e);
    var t, n, r, i, o = [],
      a = [],
      s = -1,
      u = function () {
        for (i = i || e.once, r = t = !0; a.length; s = -1) {
          n = a.shift();
          while (++s < o.length) !1 === o[s].apply(n[0], n[1]) && e.stopOnFalse && (s = o.length, n = !1)
        }
        e.memory || (n = !1), t = !1, i && (o = n ? [] : "")
      },
      l = {
        add: function () {
          return o && (n && !t && (s = o.length - 1, a.push(n)), function t(n) {
            w.each(n, function (n, r) {
              g(r) ? e.unique && l.has(r) || o.push(r) : r && r.length && "string" !== x(r) && t(r)
            })
          }(arguments), n && !t && u()), this
        },
        remove: function () {
          return w.each(arguments, function (e, t) {
            var n;
            while ((n = w.inArray(t, o, n)) > -1) o.splice(n, 1), n <= s && s--
          }), this
        },
        has: function (e) {
          return e ? w.inArray(e, o) > -1 : o.length > 0
        },
        empty: function () {
          return o && (o = []), this
        },
        disable: function () {
          return i = a = [], o = n = "", this
        },
        disabled: function () {
          return !o
        },
        lock: function () {
          return i = a = [], n || t || (o = n = ""), this
        },
        locked: function () {
          return !!i
        },
        fireWith: function (e, n) {
          return i || (n = [e, (n = n || []).slice ? n.slice() : n], a.push(n), t || u()), this
        },
        fire: function () {
          return l.fireWith(this, arguments), this
        },
        fired: function () {
          return !!r
        }
      };
    return l
  };

  function I(e) {
    return e
  }

  function W(e) {
    throw e
  }

  function $(e, t, n, r) {
    var i;
    try {
      e && g(i = e.promise) ? i.call(e).done(t).fail(n) : e && g(i = e.then) ? i.call(e, t, n) : t.apply(void 0, [e].slice(r))
    } catch (e) {
      n.apply(void 0, [e])
    }
  }
  w.extend({
    Deferred: function (t) {
      var n = [
          ["notify", "progress", w.Callbacks("memory"), w.Callbacks("memory"), 2],
          ["resolve", "done", w.Callbacks("once memory"), w.Callbacks("once memory"), 0, "resolved"],
          ["reject", "fail", w.Callbacks("once memory"), w.Callbacks("once memory"), 1, "rejected"]
        ],
        r = "pending",
        i = {
          state: function () {
            return r
          },
          always: function () {
            return o.done(arguments).fail(arguments), this
          },
          "catch": function (e) {
            return i.then(null, e)
          },
          pipe: function () {
            var e = arguments;
            return w.Deferred(function (t) {
              w.each(n, function (n, r) {
                var i = g(e[r[4]]) && e[r[4]];
                o[r[1]](function () {
                  var e = i && i.apply(this, arguments);
                  e && g(e.promise) ? e.promise().progress(t.notify).done(t.resolve).fail(t.reject) : t[r[0] + "With"](this, i ? [e] : arguments)
                })
              }), e = null
            }).promise()
          },
          then: function (t, r, i) {
            var o = 0;

            function a(t, n, r, i) {
              return function () {
                var s = this,
                  u = arguments,
                  l = function () {
                    var e, l;
                    if (!(t < o)) {
                      if ((e = r.apply(s, u)) === n.promise()) throw new TypeError("Thenable self-resolution");
                      l = e && ("object" == typeof e || "function" == typeof e) && e.then, g(l) ? i ? l.call(e, a(o, n, I, i), a(o, n, W, i)) : (o++, l.call(e, a(o, n, I, i), a(o, n, W, i), a(o, n, I, n.notifyWith))) : (r !== I && (s = void 0, u = [e]), (i || n.resolveWith)(s, u))
                    }
                  },
                  c = i ? l : function () {
                    try {
                      l()
                    } catch (e) {
                      w.Deferred.exceptionHook && w.Deferred.exceptionHook(e, c.stackTrace), t + 1 >= o && (r !== W && (s = void 0, u = [e]), n.rejectWith(s, u))
                    }
                  };
                t ? c() : (w.Deferred.getStackHook && (c.stackTrace = w.Deferred.getStackHook()), e.setTimeout(c))
              }
            }
            return w.Deferred(function (e) {
              n[0][3].add(a(0, e, g(i) ? i : I, e.notifyWith)), n[1][3].add(a(0, e, g(t) ? t : I)), n[2][3].add(a(0, e, g(r) ? r : W))
            }).promise()
          },
          promise: function (e) {
            return null != e ? w.extend(e, i) : i
          }
        },
        o = {};
      return w.each(n, function (e, t) {
        var a = t[2],
          s = t[5];
        i[t[1]] = a.add, s && a.add(function () {
          r = s
        }, n[3 - e][2].disable, n[3 - e][3].disable, n[0][2].lock, n[0][3].lock), a.add(t[3].fire), o[t[0]] = function () {
          return o[t[0] + "With"](this === o ? void 0 : this, arguments), this
        }, o[t[0] + "With"] = a.fireWith
      }), i.promise(o), t && t.call(o, o), o
    },
    when: function (e) {
      var t = arguments.length,
        n = t,
        r = Array(n),
        i = o.call(arguments),
        a = w.Deferred(),
        s = function (e) {
          return function (n) {
            r[e] = this, i[e] = arguments.length > 1 ? o.call(arguments) : n, --t || a.resolveWith(r, i)
          }
        };
      if (t <= 1 && ($(e, a.done(s(n)).resolve, a.reject, !t), "pending" === a.state() || g(i[n] && i[n].then))) return a.then();
      while (n--) $(i[n], s(n), a.reject);
      return a.promise()
    }
  });
  var B = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
  w.Deferred.exceptionHook = function (t, n) {
    e.console && e.console.warn && t && B.test(t.name) && e.console.warn("jQuery.Deferred exception: " + t.message, t.stack, n)
  }, w.readyException = function (t) {
    e.setTimeout(function () {
      throw t
    })
  };
  var F = w.Deferred();
  w.fn.ready = function (e) {
    return F.then(e)["catch"](function (e) {
      w.readyException(e)
    }), this
  }, w.extend({
    isReady: !1,
    readyWait: 1,
    ready: function (e) {
      (!0 === e ? --w.readyWait : w.isReady) || (w.isReady = !0, !0 !== e && --w.readyWait > 0 || F.resolveWith(r, [w]))
    }
  }), w.ready.then = F.then;

  function _() {
    r.removeEventListener("DOMContentLoaded", _), e.removeEventListener("load", _), w.ready()
  }
  "complete" === r.readyState || "loading" !== r.readyState && !r.documentElement.doScroll ? e.setTimeout(w.ready) : (r.addEventListener("DOMContentLoaded", _), e.addEventListener("load", _));
  var z = function (e, t, n, r, i, o, a) {
      var s = 0,
        u = e.length,
        l = null == n;
      if ("object" === x(n)) {
        i = !0;
        for (s in n) z(e, t, s, n[s], !0, o, a)
      } else if (void 0 !== r && (i = !0, g(r) || (a = !0), l && (a ? (t.call(e, r), t = null) : (l = t, t = function (e, t, n) {
          return l.call(w(e), n)
        })), t))
        for (; s < u; s++) t(e[s], n, a ? r : r.call(e[s], s, t(e[s], n)));
      return i ? e : l ? t.call(e) : u ? t(e[0], n) : o
    },
    X = /^-ms-/,
    U = /-([a-z])/g;

  function V(e, t) {
    return t.toUpperCase()
  }

  function G(e) {
    return e.replace(X, "ms-").replace(U, V)
  }
  var Y = function (e) {
    return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType
  };

  function Q() {
    this.expando = w.expando + Q.uid++
  }
  Q.uid = 1, Q.prototype = {
    cache: function (e) {
      var t = e[this.expando];
      return t || (t = {}, Y(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, {
        value: t,
        configurable: !0
      }))), t
    },
    set: function (e, t, n) {
      var r, i = this.cache(e);
      if ("string" == typeof t) i[G(t)] = n;
      else
        for (r in t) i[G(r)] = t[r];
      return i
    },
    get: function (e, t) {
      return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][G(t)]
    },
    access: function (e, t, n) {
      return void 0 === t || t && "string" == typeof t && void 0 === n ? this.get(e, t) : (this.set(e, t, n), void 0 !== n ? n : t)
    },
    remove: function (e, t) {
      var n, r = e[this.expando];
      if (void 0 !== r) {
        if (void 0 !== t) {
          n = (t = Array.isArray(t) ? t.map(G) : (t = G(t)) in r ? [t] : t.match(M) || []).length;
          while (n--) delete r[t[n]]
        }(void 0 === t || w.isEmptyObject(r)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando])
      }
    },
    hasData: function (e) {
      var t = e[this.expando];
      return void 0 !== t && !w.isEmptyObject(t)
    }
  };
  var J = new Q,
    K = new Q,
    Z = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
    ee = /[A-Z]/g;

  function te(e) {
    return "true" === e || "false" !== e && ("null" === e ? null : e === +e + "" ? +e : Z.test(e) ? JSON.parse(e) : e)
  }

  function ne(e, t, n) {
    var r;
    if (void 0 === n && 1 === e.nodeType)
      if (r = "data-" + t.replace(ee, "-$&").toLowerCase(), "string" == typeof (n = e.getAttribute(r))) {
        try {
          n = te(n)
        } catch (e) {}
        K.set(e, t, n)
      } else n = void 0;
    return n
  }
  w.extend({
    hasData: function (e) {
      return K.hasData(e) || J.hasData(e)
    },
    data: function (e, t, n) {
      return K.access(e, t, n)
    },
    removeData: function (e, t) {
      K.remove(e, t)
    },
    _data: function (e, t, n) {
      return J.access(e, t, n)
    },
    _removeData: function (e, t) {
      J.remove(e, t)
    }
  }), w.fn.extend({
    data: function (e, t) {
      var n, r, i, o = this[0],
        a = o && o.attributes;
      if (void 0 === e) {
        if (this.length && (i = K.get(o), 1 === o.nodeType && !J.get(o, "hasDataAttrs"))) {
          n = a.length;
          while (n--) a[n] && 0 === (r = a[n].name).indexOf("data-") && (r = G(r.slice(5)), ne(o, r, i[r]));
          J.set(o, "hasDataAttrs", !0)
        }
        return i
      }
      return "object" == typeof e ? this.each(function () {
        K.set(this, e)
      }) : z(this, function (t) {
        var n;
        if (o && void 0 === t) {
          if (void 0 !== (n = K.get(o, e))) return n;
          if (void 0 !== (n = ne(o, e))) return n
        } else this.each(function () {
          K.set(this, e, t)
        })
      }, null, t, arguments.length > 1, null, !0)
    },
    removeData: function (e) {
      return this.each(function () {
        K.remove(this, e)
      })
    }
  }), w.extend({
    queue: function (e, t, n) {
      var r;
      if (e) return t = (t || "fx") + "queue", r = J.get(e, t), n && (!r || Array.isArray(n) ? r = J.access(e, t, w.makeArray(n)) : r.push(n)), r || []
    },
    dequeue: function (e, t) {
      t = t || "fx";
      var n = w.queue(e, t),
        r = n.length,
        i = n.shift(),
        o = w._queueHooks(e, t),
        a = function () {
          w.dequeue(e, t)
        };
      "inprogress" === i && (i = n.shift(), r--), i && ("fx" === t && n.unshift("inprogress"), delete o.stop, i.call(e, a, o)), !r && o && o.empty.fire()
    },
    _queueHooks: function (e, t) {
      var n = t + "queueHooks";
      return J.get(e, n) || J.access(e, n, {
        empty: w.Callbacks("once memory").add(function () {
          J.remove(e, [t + "queue", n])
        })
      })
    }
  }), w.fn.extend({
    queue: function (e, t) {
      var n = 2;
      return "string" != typeof e && (t = e, e = "fx", n--), arguments.length < n ? w.queue(this[0], e) : void 0 === t ? this : this.each(function () {
        var n = w.queue(this, e, t);
        w._queueHooks(this, e), "fx" === e && "inprogress" !== n[0] && w.dequeue(this, e)
      })
    },
    dequeue: function (e) {
      return this.each(function () {
        w.dequeue(this, e)
      })
    },
    clearQueue: function (e) {
      return this.queue(e || "fx", [])
    },
    promise: function (e, t) {
      var n, r = 1,
        i = w.Deferred(),
        o = this,
        a = this.length,
        s = function () {
          --r || i.resolveWith(o, [o])
        };
      "string" != typeof e && (t = e, e = void 0), e = e || "fx";
      while (a--)(n = J.get(o[a], e + "queueHooks")) && n.empty && (r++, n.empty.add(s));
      return s(), i.promise(t)
    }
  });
  var re = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
    ie = new RegExp("^(?:([+-])=|)(" + re + ")([a-z%]*)$", "i"),
    oe = ["Top", "Right", "Bottom", "Left"],
    ae = function (e, t) {
      return "none" === (e = t || e).style.display || "" === e.style.display && w.contains(e.ownerDocument, e) && "none" === w.css(e, "display")
    },
    se = function (e, t, n, r) {
      var i, o, a = {};
      for (o in t) a[o] = e.style[o], e.style[o] = t[o];
      i = n.apply(e, r || []);
      for (o in t) e.style[o] = a[o];
      return i
    };

  function ue(e, t, n, r) {
    var i, o, a = 20,
      s = r ? function () {
        return r.cur()
      } : function () {
        return w.css(e, t, "")
      },
      u = s(),
      l = n && n[3] || (w.cssNumber[t] ? "" : "px"),
      c = (w.cssNumber[t] || "px" !== l && +u) && ie.exec(w.css(e, t));
    if (c && c[3] !== l) {
      u /= 2, l = l || c[3], c = +u || 1;
      while (a--) w.style(e, t, c + l), (1 - o) * (1 - (o = s() / u || .5)) <= 0 && (a = 0), c /= o;
      c *= 2, w.style(e, t, c + l), n = n || []
    }
    return n && (c = +c || +u || 0, i = n[1] ? c + (n[1] + 1) * n[2] : +n[2], r && (r.unit = l, r.start = c, r.end = i)), i
  }
  var le = {};

  function ce(e) {
    var t, n = e.ownerDocument,
      r = e.nodeName,
      i = le[r];
    return i || (t = n.body.appendChild(n.createElement(r)), i = w.css(t, "display"), t.parentNode.removeChild(t), "none" === i && (i = "block"), le[r] = i, i)
  }

  function fe(e, t) {
    for (var n, r, i = [], o = 0, a = e.length; o < a; o++)(r = e[o]).style && (n = r.style.display, t ? ("none" === n && (i[o] = J.get(r, "display") || null, i[o] || (r.style.display = "")), "" === r.style.display && ae(r) && (i[o] = ce(r))) : "none" !== n && (i[o] = "none", J.set(r, "display", n)));
    for (o = 0; o < a; o++) null != i[o] && (e[o].style.display = i[o]);
    return e
  }
  w.fn.extend({
    show: function () {
      return fe(this, !0)
    },
    hide: function () {
      return fe(this)
    },
    toggle: function (e) {
      return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function () {
        ae(this) ? w(this).show() : w(this).hide()
      })
    }
  });
  var pe = /^(?:checkbox|radio)$/i,
    de = /<([a-z][^\/\0>\x20\t\r\n\f]+)/i,
    he = /^$|^module$|\/(?:java|ecma)script/i,
    ge = {
      option: [1, "<select multiple='multiple'>", "</select>"],
      thead: [1, "<table>", "</table>"],
      col: [2, "<table><colgroup>", "</colgroup></table>"],
      tr: [2, "<table><tbody>", "</tbody></table>"],
      td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
      _default: [0, "", ""]
    };
  ge.optgroup = ge.option, ge.tbody = ge.tfoot = ge.colgroup = ge.caption = ge.thead, ge.th = ge.td;

  function ye(e, t) {
    var n;
    return n = "undefined" != typeof e.getElementsByTagName ? e.getElementsByTagName(t || "*") : "undefined" != typeof e.querySelectorAll ? e.querySelectorAll(t || "*") : [], void 0 === t || t && N(e, t) ? w.merge([e], n) : n
  }

  function ve(e, t) {
    for (var n = 0, r = e.length; n < r; n++) J.set(e[n], "globalEval", !t || J.get(t[n], "globalEval"))
  }
  var me = /<|&#?\w+;/;

  function xe(e, t, n, r, i) {
    for (var o, a, s, u, l, c, f = t.createDocumentFragment(), p = [], d = 0, h = e.length; d < h; d++)
      if ((o = e[d]) || 0 === o)
        if ("object" === x(o)) w.merge(p, o.nodeType ? [o] : o);
        else if (me.test(o)) {
      a = a || f.appendChild(t.createElement("div")), s = (de.exec(o) || ["", ""])[1].toLowerCase(), u = ge[s] || ge._default, a.innerHTML = u[1] + w.htmlPrefilter(o) + u[2], c = u[0];
      while (c--) a = a.lastChild;
      w.merge(p, a.childNodes), (a = f.firstChild).textContent = ""
    } else p.push(t.createTextNode(o));
    f.textContent = "", d = 0;
    while (o = p[d++])
      if (r && w.inArray(o, r) > -1) i && i.push(o);
      else if (l = w.contains(o.ownerDocument, o), a = ye(f.appendChild(o), "script"), l && ve(a), n) {
      c = 0;
      while (o = a[c++]) he.test(o.type || "") && n.push(o)
    }
    return f
  }! function () {
    var e = r.createDocumentFragment().appendChild(r.createElement("div")),
      t = r.createElement("input");
    t.setAttribute("type", "radio"), t.setAttribute("checked", "checked"), t.setAttribute("name", "t"), e.appendChild(t), h.checkClone = e.cloneNode(!0).cloneNode(!0).lastChild.checked, e.innerHTML = "<textarea>x</textarea>", h.noCloneChecked = !!e.cloneNode(!0).lastChild.defaultValue
  }();
  var be = r.documentElement,
    we = /^key/,
    Te = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
    Ce = /^([^.]*)(?:\.(.+)|)/;

  function Ee() {
    return !0
  }

  function ke() {
    return !1
  }

  function Se() {
    try {
      return r.activeElement
    } catch (e) {}
  }

  function De(e, t, n, r, i, o) {
    var a, s;
    if ("object" == typeof t) {
      "string" != typeof n && (r = r || n, n = void 0);
      for (s in t) De(e, s, n, r, t[s], o);
      return e
    }
    if (null == r && null == i ? (i = n, r = n = void 0) : null == i && ("string" == typeof n ? (i = r, r = void 0) : (i = r, r = n, n = void 0)), !1 === i) i = ke;
    else if (!i) return e;
    return 1 === o && (a = i, (i = function (e) {
      return w().off(e), a.apply(this, arguments)
    }).guid = a.guid || (a.guid = w.guid++)), e.each(function () {
      w.event.add(this, t, i, r, n)
    })
  }
  w.event = {
    global: {},
    add: function (e, t, n, r, i) {
      var o, a, s, u, l, c, f, p, d, h, g, y = J.get(e);
      if (y) {
        n.handler && (n = (o = n).handler, i = o.selector), i && w.find.matchesSelector(be, i), n.guid || (n.guid = w.guid++), (u = y.events) || (u = y.events = {}), (a = y.handle) || (a = y.handle = function (t) {
          return "undefined" != typeof w && w.event.triggered !== t.type ? w.event.dispatch.apply(e, arguments) : void 0
        }), l = (t = (t || "").match(M) || [""]).length;
        while (l--) d = g = (s = Ce.exec(t[l]) || [])[1], h = (s[2] || "").split(".").sort(), d && (f = w.event.special[d] || {}, d = (i ? f.delegateType : f.bindType) || d, f = w.event.special[d] || {}, c = w.extend({
          type: d,
          origType: g,
          data: r,
          handler: n,
          guid: n.guid,
          selector: i,
          needsContext: i && w.expr.match.needsContext.test(i),
          namespace: h.join(".")
        }, o), (p = u[d]) || ((p = u[d] = []).delegateCount = 0, f.setup && !1 !== f.setup.call(e, r, h, a) || e.addEventListener && e.addEventListener(d, a)), f.add && (f.add.call(e, c), c.handler.guid || (c.handler.guid = n.guid)), i ? p.splice(p.delegateCount++, 0, c) : p.push(c), w.event.global[d] = !0)
      }
    },
    remove: function (e, t, n, r, i) {
      var o, a, s, u, l, c, f, p, d, h, g, y = J.hasData(e) && J.get(e);
      if (y && (u = y.events)) {
        l = (t = (t || "").match(M) || [""]).length;
        while (l--)
          if (s = Ce.exec(t[l]) || [], d = g = s[1], h = (s[2] || "").split(".").sort(), d) {
            f = w.event.special[d] || {}, p = u[d = (r ? f.delegateType : f.bindType) || d] || [], s = s[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"), a = o = p.length;
            while (o--) c = p[o], !i && g !== c.origType || n && n.guid !== c.guid || s && !s.test(c.namespace) || r && r !== c.selector && ("**" !== r || !c.selector) || (p.splice(o, 1), c.selector && p.delegateCount--, f.remove && f.remove.call(e, c));
            a && !p.length && (f.teardown && !1 !== f.teardown.call(e, h, y.handle) || w.removeEvent(e, d, y.handle), delete u[d])
          } else
            for (d in u) w.event.remove(e, d + t[l], n, r, !0);
        w.isEmptyObject(u) && J.remove(e, "handle events")
      }
    },
    dispatch: function (e) {
      var t = w.event.fix(e),
        n, r, i, o, a, s, u = new Array(arguments.length),
        l = (J.get(this, "events") || {})[t.type] || [],
        c = w.event.special[t.type] || {};
      for (u[0] = t, n = 1; n < arguments.length; n++) u[n] = arguments[n];
      if (t.delegateTarget = this, !c.preDispatch || !1 !== c.preDispatch.call(this, t)) {
        s = w.event.handlers.call(this, t, l), n = 0;
        while ((o = s[n++]) && !t.isPropagationStopped()) {
          t.currentTarget = o.elem, r = 0;
          while ((a = o.handlers[r++]) && !t.isImmediatePropagationStopped()) t.rnamespace && !t.rnamespace.test(a.namespace) || (t.handleObj = a, t.data = a.data, void 0 !== (i = ((w.event.special[a.origType] || {}).handle || a.handler).apply(o.elem, u)) && !1 === (t.result = i) && (t.preventDefault(), t.stopPropagation()))
        }
        return c.postDispatch && c.postDispatch.call(this, t), t.result
      }
    },
    handlers: function (e, t) {
      var n, r, i, o, a, s = [],
        u = t.delegateCount,
        l = e.target;
      if (u && l.nodeType && !("click" === e.type && e.button >= 1))
        for (; l !== this; l = l.parentNode || this)
          if (1 === l.nodeType && ("click" !== e.type || !0 !== l.disabled)) {
            for (o = [], a = {}, n = 0; n < u; n++) void 0 === a[i = (r = t[n]).selector + " "] && (a[i] = r.needsContext ? w(i, this).index(l) > -1 : w.find(i, this, null, [l]).length), a[i] && o.push(r);
            o.length && s.push({
              elem: l,
              handlers: o
            })
          } return l = this, u < t.length && s.push({
        elem: l,
        handlers: t.slice(u)
      }), s
    },
    addProp: function (e, t) {
      Object.defineProperty(w.Event.prototype, e, {
        enumerable: !0,
        configurable: !0,
        get: g(t) ? function () {
          if (this.originalEvent) return t(this.originalEvent)
        } : function () {
          if (this.originalEvent) return this.originalEvent[e]
        },
        set: function (t) {
          Object.defineProperty(this, e, {
            enumerable: !0,
            configurable: !0,
            writable: !0,
            value: t
          })
        }
      })
    },
    fix: function (e) {
      return e[w.expando] ? e : new w.Event(e)
    },
    special: {
      load: {
        noBubble: !0
      },
      focus: {
        trigger: function () {
          if (this !== Se() && this.focus) return this.focus(), !1
        },
        delegateType: "focusin"
      },
      blur: {
        trigger: function () {
          if (this === Se() && this.blur) return this.blur(), !1
        },
        delegateType: "focusout"
      },
      click: {
        trigger: function () {
          if ("checkbox" === this.type && this.click && N(this, "input")) return this.click(), !1
        },
        _default: function (e) {
          return N(e.target, "a")
        }
      },
      beforeunload: {
        postDispatch: function (e) {
          void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result)
        }
      }
    }
  }, w.removeEvent = function (e, t, n) {
    e.removeEventListener && e.removeEventListener(t, n)
  }, w.Event = function (e, t) {
    if (!(this instanceof w.Event)) return new w.Event(e, t);
    e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && !1 === e.returnValue ? Ee : ke, this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target, this.currentTarget = e.currentTarget, this.relatedTarget = e.relatedTarget) : this.type = e, t && w.extend(this, t), this.timeStamp = e && e.timeStamp || Date.now(), this[w.expando] = !0
  }, w.Event.prototype = {
    constructor: w.Event,
    isDefaultPrevented: ke,
    isPropagationStopped: ke,
    isImmediatePropagationStopped: ke,
    isSimulated: !1,
    preventDefault: function () {
      var e = this.originalEvent;
      this.isDefaultPrevented = Ee, e && !this.isSimulated && e.preventDefault()
    },
    stopPropagation: function () {
      var e = this.originalEvent;
      this.isPropagationStopped = Ee, e && !this.isSimulated && e.stopPropagation()
    },
    stopImmediatePropagation: function () {
      var e = this.originalEvent;
      this.isImmediatePropagationStopped = Ee, e && !this.isSimulated && e.stopImmediatePropagation(), this.stopPropagation()
    }
  }, w.each({
    altKey: !0,
    bubbles: !0,
    cancelable: !0,
    changedTouches: !0,
    ctrlKey: !0,
    detail: !0,
    eventPhase: !0,
    metaKey: !0,
    pageX: !0,
    pageY: !0,
    shiftKey: !0,
    view: !0,
    "char": !0,
    charCode: !0,
    key: !0,
    keyCode: !0,
    button: !0,
    buttons: !0,
    clientX: !0,
    clientY: !0,
    offsetX: !0,
    offsetY: !0,
    pointerId: !0,
    pointerType: !0,
    screenX: !0,
    screenY: !0,
    targetTouches: !0,
    toElement: !0,
    touches: !0,
    which: function (e) {
      var t = e.button;
      return null == e.which && we.test(e.type) ? null != e.charCode ? e.charCode : e.keyCode : !e.which && void 0 !== t && Te.test(e.type) ? 1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0 : e.which
    }
  }, w.event.addProp), w.each({
    mouseenter: "mouseover",
    mouseleave: "mouseout",
    pointerenter: "pointerover",
    pointerleave: "pointerout"
  }, function (e, t) {
    w.event.special[e] = {
      delegateType: t,
      bindType: t,
      handle: function (e) {
        var n, r = this,
          i = e.relatedTarget,
          o = e.handleObj;
        return i && (i === r || w.contains(r, i)) || (e.type = o.origType, n = o.handler.apply(this, arguments), e.type = t), n
      }
    }
  }), w.fn.extend({
    on: function (e, t, n, r) {
      return De(this, e, t, n, r)
    },
    one: function (e, t, n, r) {
      return De(this, e, t, n, r, 1)
    },
    off: function (e, t, n) {
      var r, i;
      if (e && e.preventDefault && e.handleObj) return r = e.handleObj, w(e.delegateTarget).off(r.namespace ? r.origType + "." + r.namespace : r.origType, r.selector, r.handler), this;
      if ("object" == typeof e) {
        for (i in e) this.off(i, t, e[i]);
        return this
      }
      return !1 !== t && "function" != typeof t || (n = t, t = void 0), !1 === n && (n = ke), this.each(function () {
        w.event.remove(this, e, n, t)
      })
    }
  });
  var Ne = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,
    Ae = /<script|<style|<link/i,
    je = /checked\s*(?:[^=]|=\s*.checked.)/i,
    qe = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

  function Le(e, t) {
    return N(e, "table") && N(11 !== t.nodeType ? t : t.firstChild, "tr") ? w(e).children("tbody")[0] || e : e
  }

  function He(e) {
    return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e
  }

  function Oe(e) {
    return "true/" === (e.type || "").slice(0, 5) ? e.type = e.type.slice(5) : e.removeAttribute("type"), e
  }

  function Pe(e, t) {
    var n, r, i, o, a, s, u, l;
    if (1 === t.nodeType) {
      if (J.hasData(e) && (o = J.access(e), a = J.set(t, o), l = o.events)) {
        delete a.handle, a.events = {};
        for (i in l)
          for (n = 0, r = l[i].length; n < r; n++) w.event.add(t, i, l[i][n])
      }
      K.hasData(e) && (s = K.access(e), u = w.extend({}, s), K.set(t, u))
    }
  }

  function Me(e, t) {
    var n = t.nodeName.toLowerCase();
    "input" === n && pe.test(e.type) ? t.checked = e.checked : "input" !== n && "textarea" !== n || (t.defaultValue = e.defaultValue)
  }

  function Re(e, t, n, r) {
    t = a.apply([], t);
    var i, o, s, u, l, c, f = 0,
      p = e.length,
      d = p - 1,
      y = t[0],
      v = g(y);
    if (v || p > 1 && "string" == typeof y && !h.checkClone && je.test(y)) return e.each(function (i) {
      var o = e.eq(i);
      v && (t[0] = y.call(this, i, o.html())), Re(o, t, n, r)
    });
    if (p && (i = xe(t, e[0].ownerDocument, !1, e, r), o = i.firstChild, 1 === i.childNodes.length && (i = o), o || r)) {
      for (u = (s = w.map(ye(i, "script"), He)).length; f < p; f++) l = i, f !== d && (l = w.clone(l, !0, !0), u && w.merge(s, ye(l, "script"))), n.call(e[f], l, f);
      if (u)
        for (c = s[s.length - 1].ownerDocument, w.map(s, Oe), f = 0; f < u; f++) l = s[f], he.test(l.type || "") && !J.access(l, "globalEval") && w.contains(c, l) && (l.src && "module" !== (l.type || "").toLowerCase() ? w._evalUrl && w._evalUrl(l.src) : m(l.textContent.replace(qe, ""), c, l))
    }
    return e
  }

  function Ie(e, t, n) {
    for (var r, i = t ? w.filter(t, e) : e, o = 0; null != (r = i[o]); o++) n || 1 !== r.nodeType || w.cleanData(ye(r)), r.parentNode && (n && w.contains(r.ownerDocument, r) && ve(ye(r, "script")), r.parentNode.removeChild(r));
    return e
  }
  w.extend({
    htmlPrefilter: function (e) {
      return e.replace(Ne, "<$1></$2>")
    },
    clone: function (e, t, n) {
      var r, i, o, a, s = e.cloneNode(!0),
        u = w.contains(e.ownerDocument, e);
      if (!(h.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || w.isXMLDoc(e)))
        for (a = ye(s), r = 0, i = (o = ye(e)).length; r < i; r++) Me(o[r], a[r]);
      if (t)
        if (n)
          for (o = o || ye(e), a = a || ye(s), r = 0, i = o.length; r < i; r++) Pe(o[r], a[r]);
        else Pe(e, s);
      return (a = ye(s, "script")).length > 0 && ve(a, !u && ye(e, "script")), s
    },
    cleanData: function (e) {
      for (var t, n, r, i = w.event.special, o = 0; void 0 !== (n = e[o]); o++)
        if (Y(n)) {
          if (t = n[J.expando]) {
            if (t.events)
              for (r in t.events) i[r] ? w.event.remove(n, r) : w.removeEvent(n, r, t.handle);
            n[J.expando] = void 0
          }
          n[K.expando] && (n[K.expando] = void 0)
        }
    }
  }), w.fn.extend({
    detach: function (e) {
      return Ie(this, e, !0)
    },
    remove: function (e) {
      return Ie(this, e)
    },
    text: function (e) {
      return z(this, function (e) {
        return void 0 === e ? w.text(this) : this.empty().each(function () {
          1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = e)
        })
      }, null, e, arguments.length)
    },
    append: function () {
      return Re(this, arguments, function (e) {
        1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || Le(this, e).appendChild(e)
      })
    },
    prepend: function () {
      return Re(this, arguments, function (e) {
        if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
          var t = Le(this, e);
          t.insertBefore(e, t.firstChild)
        }
      })
    },
    before: function () {
      return Re(this, arguments, function (e) {
        this.parentNode && this.parentNode.insertBefore(e, this)
      })
    },
    after: function () {
      return Re(this, arguments, function (e) {
        this.parentNode && this.parentNode.insertBefore(e, this.nextSibling)
      })
    },
    empty: function () {
      for (var e, t = 0; null != (e = this[t]); t++) 1 === e.nodeType && (w.cleanData(ye(e, !1)), e.textContent = "");
      return this
    },
    clone: function (e, t) {
      return e = null != e && e, t = null == t ? e : t, this.map(function () {
        return w.clone(this, e, t)
      })
    },
    html: function (e) {
      return z(this, function (e) {
        var t = this[0] || {},
          n = 0,
          r = this.length;
        if (void 0 === e && 1 === t.nodeType) return t.innerHTML;
        if ("string" == typeof e && !Ae.test(e) && !ge[(de.exec(e) || ["", ""])[1].toLowerCase()]) {
          e = w.htmlPrefilter(e);
          try {
            for (; n < r; n++) 1 === (t = this[n] || {}).nodeType && (w.cleanData(ye(t, !1)), t.innerHTML = e);
            t = 0
          } catch (e) {}
        }
        t && this.empty().append(e)
      }, null, e, arguments.length)
    },
    replaceWith: function () {
      var e = [];
      return Re(this, arguments, function (t) {
        var n = this.parentNode;
        w.inArray(this, e) < 0 && (w.cleanData(ye(this)), n && n.replaceChild(t, this))
      }, e)
    }
  }), w.each({
    appendTo: "append",
    prependTo: "prepend",
    insertBefore: "before",
    insertAfter: "after",
    replaceAll: "replaceWith"
  }, function (e, t) {
    w.fn[e] = function (e) {
      for (var n, r = [], i = w(e), o = i.length - 1, a = 0; a <= o; a++) n = a === o ? this : this.clone(!0), w(i[a])[t](n), s.apply(r, n.get());
      return this.pushStack(r)
    }
  });
  var We = new RegExp("^(" + re + ")(?!px)[a-z%]+$", "i"),
    $e = function (t) {
      var n = t.ownerDocument.defaultView;
      return n && n.opener || (n = e), n.getComputedStyle(t)
    },
    Be = new RegExp(oe.join("|"), "i");
  ! function () {
    function t() {
      if (c) {
        l.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", c.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", be.appendChild(l).appendChild(c);
        var t = e.getComputedStyle(c);
        i = "1%" !== t.top, u = 12 === n(t.marginLeft), c.style.right = "60%", s = 36 === n(t.right), o = 36 === n(t.width), c.style.position = "absolute", a = 36 === c.offsetWidth || "absolute", be.removeChild(l), c = null
      }
    }

    function n(e) {
      return Math.round(parseFloat(e))
    }
    var i, o, a, s, u, l = r.createElement("div"),
      c = r.createElement("div");
    c.style && (c.style.backgroundClip = "content-box", c.cloneNode(!0).style.backgroundClip = "", h.clearCloneStyle = "content-box" === c.style.backgroundClip, w.extend(h, {
      boxSizingReliable: function () {
        return t(), o
      },
      pixelBoxStyles: function () {
        return t(), s
      },
      pixelPosition: function () {
        return t(), i
      },
      reliableMarginLeft: function () {
        return t(), u
      },
      scrollboxSize: function () {
        return t(), a
      }
    }))
  }();

  function Fe(e, t, n) {
    var r, i, o, a, s = e.style;
    return (n = n || $e(e)) && ("" !== (a = n.getPropertyValue(t) || n[t]) || w.contains(e.ownerDocument, e) || (a = w.style(e, t)), !h.pixelBoxStyles() && We.test(a) && Be.test(t) && (r = s.width, i = s.minWidth, o = s.maxWidth, s.minWidth = s.maxWidth = s.width = a, a = n.width, s.width = r, s.minWidth = i, s.maxWidth = o)), void 0 !== a ? a + "" : a
  }

  function _e(e, t) {
    return {
      get: function () {
        if (!e()) return (this.get = t).apply(this, arguments);
        delete this.get
      }
    }
  }
  var ze = /^(none|table(?!-c[ea]).+)/,
    Xe = /^--/,
    Ue = {
      position: "absolute",
      visibility: "hidden",
      display: "block"
    },
    Ve = {
      letterSpacing: "0",
      fontWeight: "400"
    },
    Ge = ["Webkit", "Moz", "ms"],
    Ye = r.createElement("div").style;

  function Qe(e) {
    if (e in Ye) return e;
    var t = e[0].toUpperCase() + e.slice(1),
      n = Ge.length;
    while (n--)
      if ((e = Ge[n] + t) in Ye) return e
  }

  function Je(e) {
    var t = w.cssProps[e];
    return t || (t = w.cssProps[e] = Qe(e) || e), t
  }

  function Ke(e, t, n) {
    var r = ie.exec(t);
    return r ? Math.max(0, r[2] - (n || 0)) + (r[3] || "px") : t
  }

  function Ze(e, t, n, r, i, o) {
    var a = "width" === t ? 1 : 0,
      s = 0,
      u = 0;
    if (n === (r ? "border" : "content")) return 0;
    for (; a < 4; a += 2) "margin" === n && (u += w.css(e, n + oe[a], !0, i)), r ? ("content" === n && (u -= w.css(e, "padding" + oe[a], !0, i)), "margin" !== n && (u -= w.css(e, "border" + oe[a] + "Width", !0, i))) : (u += w.css(e, "padding" + oe[a], !0, i), "padding" !== n ? u += w.css(e, "border" + oe[a] + "Width", !0, i) : s += w.css(e, "border" + oe[a] + "Width", !0, i));
    return !r && o >= 0 && (u += Math.max(0, Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - o - u - s - .5))), u
  }

  function et(e, t, n) {
    var r = $e(e),
      i = Fe(e, t, r),
      o = "border-box" === w.css(e, "boxSizing", !1, r),
      a = o;
    if (We.test(i)) {
      if (!n) return i;
      i = "auto"
    }
    return a = a && (h.boxSizingReliable() || i === e.style[t]), ("auto" === i || !parseFloat(i) && "inline" === w.css(e, "display", !1, r)) && (i = e["offset" + t[0].toUpperCase() + t.slice(1)], a = !0), (i = parseFloat(i) || 0) + Ze(e, t, n || (o ? "border" : "content"), a, r, i) + "px"
  }
  w.extend({
    cssHooks: {
      opacity: {
        get: function (e, t) {
          if (t) {
            var n = Fe(e, "opacity");
            return "" === n ? "1" : n
          }
        }
      }
    },
    cssNumber: {
      animationIterationCount: !0,
      columnCount: !0,
      fillOpacity: !0,
      flexGrow: !0,
      flexShrink: !0,
      fontWeight: !0,
      lineHeight: !0,
      opacity: !0,
      order: !0,
      orphans: !0,
      widows: !0,
      zIndex: !0,
      zoom: !0
    },
    cssProps: {},
    style: function (e, t, n, r) {
      if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
        var i, o, a, s = G(t),
          u = Xe.test(t),
          l = e.style;
        if (u || (t = Je(s)), a = w.cssHooks[t] || w.cssHooks[s], void 0 === n) return a && "get" in a && void 0 !== (i = a.get(e, !1, r)) ? i : l[t];
        "string" == (o = typeof n) && (i = ie.exec(n)) && i[1] && (n = ue(e, t, i), o = "number"), null != n && n === n && ("number" === o && (n += i && i[3] || (w.cssNumber[s] ? "" : "px")), h.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (l[t] = "inherit"), a && "set" in a && void 0 === (n = a.set(e, n, r)) || (u ? l.setProperty(t, n) : l[t] = n))
      }
    },
    css: function (e, t, n, r) {
      var i, o, a, s = G(t);
      return Xe.test(t) || (t = Je(s)), (a = w.cssHooks[t] || w.cssHooks[s]) && "get" in a && (i = a.get(e, !0, n)), void 0 === i && (i = Fe(e, t, r)), "normal" === i && t in Ve && (i = Ve[t]), "" === n || n ? (o = parseFloat(i), !0 === n || isFinite(o) ? o || 0 : i) : i
    }
  }), w.each(["height", "width"], function (e, t) {
    w.cssHooks[t] = {
      get: function (e, n, r) {
        if (n) return !ze.test(w.css(e, "display")) || e.getClientRects().length && e.getBoundingClientRect().width ? et(e, t, r) : se(e, Ue, function () {
          return et(e, t, r)
        })
      },
      set: function (e, n, r) {
        var i, o = $e(e),
          a = "border-box" === w.css(e, "boxSizing", !1, o),
          s = r && Ze(e, t, r, a, o);
        return a && h.scrollboxSize() === o.position && (s -= Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - parseFloat(o[t]) - Ze(e, t, "border", !1, o) - .5)), s && (i = ie.exec(n)) && "px" !== (i[3] || "px") && (e.style[t] = n, n = w.css(e, t)), Ke(e, n, s)
      }
    }
  }), w.cssHooks.marginLeft = _e(h.reliableMarginLeft, function (e, t) {
    if (t) return (parseFloat(Fe(e, "marginLeft")) || e.getBoundingClientRect().left - se(e, {
      marginLeft: 0
    }, function () {
      return e.getBoundingClientRect().left
    })) + "px"
  }), w.each({
    margin: "",
    padding: "",
    border: "Width"
  }, function (e, t) {
    w.cssHooks[e + t] = {
      expand: function (n) {
        for (var r = 0, i = {}, o = "string" == typeof n ? n.split(" ") : [n]; r < 4; r++) i[e + oe[r] + t] = o[r] || o[r - 2] || o[0];
        return i
      }
    }, "margin" !== e && (w.cssHooks[e + t].set = Ke)
  }), w.fn.extend({
    css: function (e, t) {
      return z(this, function (e, t, n) {
        var r, i, o = {},
          a = 0;
        if (Array.isArray(t)) {
          for (r = $e(e), i = t.length; a < i; a++) o[t[a]] = w.css(e, t[a], !1, r);
          return o
        }
        return void 0 !== n ? w.style(e, t, n) : w.css(e, t)
      }, e, t, arguments.length > 1)
    }
  });

  function tt(e, t, n, r, i) {
    return new tt.prototype.init(e, t, n, r, i)
  }
  w.Tween = tt, tt.prototype = {
    constructor: tt,
    init: function (e, t, n, r, i, o) {
      this.elem = e, this.prop = n, this.easing = i || w.easing._default, this.options = t, this.start = this.now = this.cur(), this.end = r, this.unit = o || (w.cssNumber[n] ? "" : "px")
    },
    cur: function () {
      var e = tt.propHooks[this.prop];
      return e && e.get ? e.get(this) : tt.propHooks._default.get(this)
    },
    run: function (e) {
      var t, n = tt.propHooks[this.prop];
      return this.options.duration ? this.pos = t = w.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : tt.propHooks._default.set(this), this
    }
  }, tt.prototype.init.prototype = tt.prototype, tt.propHooks = {
    _default: {
      get: function (e) {
        var t;
        return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e.prop] : (t = w.css(e.elem, e.prop, "")) && "auto" !== t ? t : 0
      },
      set: function (e) {
        w.fx.step[e.prop] ? w.fx.step[e.prop](e) : 1 !== e.elem.nodeType || null == e.elem.style[w.cssProps[e.prop]] && !w.cssHooks[e.prop] ? e.elem[e.prop] = e.now : w.style(e.elem, e.prop, e.now + e.unit)
      }
    }
  }, tt.propHooks.scrollTop = tt.propHooks.scrollLeft = {
    set: function (e) {
      e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now)
    }
  }, w.easing = {
    linear: function (e) {
      return e
    },
    swing: function (e) {
      return .5 - Math.cos(e * Math.PI) / 2
    },
    _default: "swing"
  }, w.fx = tt.prototype.init, w.fx.step = {};
  var nt, rt, it = /^(?:toggle|show|hide)$/,
    ot = /queueHooks$/;

  function at() {
    rt && (!1 === r.hidden && e.requestAnimationFrame ? e.requestAnimationFrame(at) : e.setTimeout(at, w.fx.interval), w.fx.tick())
  }

  function st() {
    return e.setTimeout(function () {
      nt = void 0
    }), nt = Date.now()
  }

  function ut(e, t) {
    var n, r = 0,
      i = {
        height: e
      };
    for (t = t ? 1 : 0; r < 4; r += 2 - t) i["margin" + (n = oe[r])] = i["padding" + n] = e;
    return t && (i.opacity = i.width = e), i
  }

  function lt(e, t, n) {
    for (var r, i = (pt.tweeners[t] || []).concat(pt.tweeners["*"]), o = 0, a = i.length; o < a; o++)
      if (r = i[o].call(n, t, e)) return r
  }

  function ct(e, t, n) {
    var r, i, o, a, s, u, l, c, f = "width" in t || "height" in t,
      p = this,
      d = {},
      h = e.style,
      g = e.nodeType && ae(e),
      y = J.get(e, "fxshow");
    n.queue || (null == (a = w._queueHooks(e, "fx")).unqueued && (a.unqueued = 0, s = a.empty.fire, a.empty.fire = function () {
      a.unqueued || s()
    }), a.unqueued++, p.always(function () {
      p.always(function () {
        a.unqueued--, w.queue(e, "fx").length || a.empty.fire()
      })
    }));
    for (r in t)
      if (i = t[r], it.test(i)) {
        if (delete t[r], o = o || "toggle" === i, i === (g ? "hide" : "show")) {
          if ("show" !== i || !y || void 0 === y[r]) continue;
          g = !0
        }
        d[r] = y && y[r] || w.style(e, r)
      } if ((u = !w.isEmptyObject(t)) || !w.isEmptyObject(d)) {
      f && 1 === e.nodeType && (n.overflow = [h.overflow, h.overflowX, h.overflowY], null == (l = y && y.display) && (l = J.get(e, "display")), "none" === (c = w.css(e, "display")) && (l ? c = l : (fe([e], !0), l = e.style.display || l, c = w.css(e, "display"), fe([e]))), ("inline" === c || "inline-block" === c && null != l) && "none" === w.css(e, "float") && (u || (p.done(function () {
        h.display = l
      }), null == l && (c = h.display, l = "none" === c ? "" : c)), h.display = "inline-block")), n.overflow && (h.overflow = "hidden", p.always(function () {
        h.overflow = n.overflow[0], h.overflowX = n.overflow[1], h.overflowY = n.overflow[2]
      })), u = !1;
      for (r in d) u || (y ? "hidden" in y && (g = y.hidden) : y = J.access(e, "fxshow", {
        display: l
      }), o && (y.hidden = !g), g && fe([e], !0), p.done(function () {
        g || fe([e]), J.remove(e, "fxshow");
        for (r in d) w.style(e, r, d[r])
      })), u = lt(g ? y[r] : 0, r, p), r in y || (y[r] = u.start, g && (u.end = u.start, u.start = 0))
    }
  }

  function ft(e, t) {
    var n, r, i, o, a;
    for (n in e)
      if (r = G(n), i = t[r], o = e[n], Array.isArray(o) && (i = o[1], o = e[n] = o[0]), n !== r && (e[r] = o, delete e[n]), (a = w.cssHooks[r]) && "expand" in a) {
        o = a.expand(o), delete e[r];
        for (n in o) n in e || (e[n] = o[n], t[n] = i)
      } else t[r] = i
  }

  function pt(e, t, n) {
    var r, i, o = 0,
      a = pt.prefilters.length,
      s = w.Deferred().always(function () {
        delete u.elem
      }),
      u = function () {
        if (i) return !1;
        for (var t = nt || st(), n = Math.max(0, l.startTime + l.duration - t), r = 1 - (n / l.duration || 0), o = 0, a = l.tweens.length; o < a; o++) l.tweens[o].run(r);
        return s.notifyWith(e, [l, r, n]), r < 1 && a ? n : (a || s.notifyWith(e, [l, 1, 0]), s.resolveWith(e, [l]), !1)
      },
      l = s.promise({
        elem: e,
        props: w.extend({}, t),
        opts: w.extend(!0, {
          specialEasing: {},
          easing: w.easing._default
        }, n),
        originalProperties: t,
        originalOptions: n,
        startTime: nt || st(),
        duration: n.duration,
        tweens: [],
        createTween: function (t, n) {
          var r = w.Tween(e, l.opts, t, n, l.opts.specialEasing[t] || l.opts.easing);
          return l.tweens.push(r), r
        },
        stop: function (t) {
          var n = 0,
            r = t ? l.tweens.length : 0;
          if (i) return this;
          for (i = !0; n < r; n++) l.tweens[n].run(1);
          return t ? (s.notifyWith(e, [l, 1, 0]), s.resolveWith(e, [l, t])) : s.rejectWith(e, [l, t]), this
        }
      }),
      c = l.props;
    for (ft(c, l.opts.specialEasing); o < a; o++)
      if (r = pt.prefilters[o].call(l, e, c, l.opts)) return g(r.stop) && (w._queueHooks(l.elem, l.opts.queue).stop = r.stop.bind(r)), r;
    return w.map(c, lt, l), g(l.opts.start) && l.opts.start.call(e, l), l.progress(l.opts.progress).done(l.opts.done, l.opts.complete).fail(l.opts.fail).always(l.opts.always), w.fx.timer(w.extend(u, {
      elem: e,
      anim: l,
      queue: l.opts.queue
    })), l
  }
  w.Animation = w.extend(pt, {
      tweeners: {
        "*": [function (e, t) {
          var n = this.createTween(e, t);
          return ue(n.elem, e, ie.exec(t), n), n
        }]
      },
      tweener: function (e, t) {
        g(e) ? (t = e, e = ["*"]) : e = e.match(M);
        for (var n, r = 0, i = e.length; r < i; r++) n = e[r], pt.tweeners[n] = pt.tweeners[n] || [], pt.tweeners[n].unshift(t)
      },
      prefilters: [ct],
      prefilter: function (e, t) {
        t ? pt.prefilters.unshift(e) : pt.prefilters.push(e)
      }
    }), w.speed = function (e, t, n) {
      var r = e && "object" == typeof e ? w.extend({}, e) : {
        complete: n || !n && t || g(e) && e,
        duration: e,
        easing: n && t || t && !g(t) && t
      };
      return w.fx.off ? r.duration = 0 : "number" != typeof r.duration && (r.duration in w.fx.speeds ? r.duration = w.fx.speeds[r.duration] : r.duration = w.fx.speeds._default), null != r.queue && !0 !== r.queue || (r.queue = "fx"), r.old = r.complete, r.complete = function () {
        g(r.old) && r.old.call(this), r.queue && w.dequeue(this, r.queue)
      }, r
    }, w.fn.extend({
      fadeTo: function (e, t, n, r) {
        return this.filter(ae).css("opacity", 0).show().end().animate({
          opacity: t
        }, e, n, r)
      },
      animate: function (e, t, n, r) {
        var i = w.isEmptyObject(e),
          o = w.speed(t, n, r),
          a = function () {
            var t = pt(this, w.extend({}, e), o);
            (i || J.get(this, "finish")) && t.stop(!0)
          };
        return a.finish = a, i || !1 === o.queue ? this.each(a) : this.queue(o.queue, a)
      },
      stop: function (e, t, n) {
        var r = function (e) {
          var t = e.stop;
          delete e.stop, t(n)
        };
        return "string" != typeof e && (n = t, t = e, e = void 0), t && !1 !== e && this.queue(e || "fx", []), this.each(function () {
          var t = !0,
            i = null != e && e + "queueHooks",
            o = w.timers,
            a = J.get(this);
          if (i) a[i] && a[i].stop && r(a[i]);
          else
            for (i in a) a[i] && a[i].stop && ot.test(i) && r(a[i]);
          for (i = o.length; i--;) o[i].elem !== this || null != e && o[i].queue !== e || (o[i].anim.stop(n), t = !1, o.splice(i, 1));
          !t && n || w.dequeue(this, e)
        })
      },
      finish: function (e) {
        return !1 !== e && (e = e || "fx"), this.each(function () {
          var t, n = J.get(this),
            r = n[e + "queue"],
            i = n[e + "queueHooks"],
            o = w.timers,
            a = r ? r.length : 0;
          for (n.finish = !0, w.queue(this, e, []), i && i.stop && i.stop.call(this, !0), t = o.length; t--;) o[t].elem === this && o[t].queue === e && (o[t].anim.stop(!0), o.splice(t, 1));
          for (t = 0; t < a; t++) r[t] && r[t].finish && r[t].finish.call(this);
          delete n.finish
        })
      }
    }), w.each(["toggle", "show", "hide"], function (e, t) {
      var n = w.fn[t];
      w.fn[t] = function (e, r, i) {
        return null == e || "boolean" == typeof e ? n.apply(this, arguments) : this.animate(ut(t, !0), e, r, i)
      }
    }), w.each({
      slideDown: ut("show"),
      slideUp: ut("hide"),
      slideToggle: ut("toggle"),
      fadeIn: {
        opacity: "show"
      },
      fadeOut: {
        opacity: "hide"
      },
      fadeToggle: {
        opacity: "toggle"
      }
    }, function (e, t) {
      w.fn[e] = function (e, n, r) {
        return this.animate(t, e, n, r)
      }
    }), w.timers = [], w.fx.tick = function () {
      var e, t = 0,
        n = w.timers;
      for (nt = Date.now(); t < n.length; t++)(e = n[t])() || n[t] !== e || n.splice(t--, 1);
      n.length || w.fx.stop(), nt = void 0
    }, w.fx.timer = function (e) {
      w.timers.push(e), w.fx.start()
    }, w.fx.interval = 13, w.fx.start = function () {
      rt || (rt = !0, at())
    }, w.fx.stop = function () {
      rt = null
    }, w.fx.speeds = {
      slow: 600,
      fast: 200,
      _default: 400
    }, w.fn.delay = function (t, n) {
      return t = w.fx ? w.fx.speeds[t] || t : t, n = n || "fx", this.queue(n, function (n, r) {
        var i = e.setTimeout(n, t);
        r.stop = function () {
          e.clearTimeout(i)
        }
      })
    },
    function () {
      var e = r.createElement("input"),
        t = r.createElement("select").appendChild(r.createElement("option"));
      e.type = "checkbox", h.checkOn = "" !== e.value, h.optSelected = t.selected, (e = r.createElement("input")).value = "t", e.type = "radio", h.radioValue = "t" === e.value
    }();
  var dt, ht = w.expr.attrHandle;
  w.fn.extend({
    attr: function (e, t) {
      return z(this, w.attr, e, t, arguments.length > 1)
    },
    removeAttr: function (e) {
      return this.each(function () {
        w.removeAttr(this, e)
      })
    }
  }), w.extend({
    attr: function (e, t, n) {
      var r, i, o = e.nodeType;
      if (3 !== o && 8 !== o && 2 !== o) return "undefined" == typeof e.getAttribute ? w.prop(e, t, n) : (1 === o && w.isXMLDoc(e) || (i = w.attrHooks[t.toLowerCase()] || (w.expr.match.bool.test(t) ? dt : void 0)), void 0 !== n ? null === n ? void w.removeAttr(e, t) : i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : (e.setAttribute(t, n + ""), n) : i && "get" in i && null !== (r = i.get(e, t)) ? r : null == (r = w.find.attr(e, t)) ? void 0 : r)
    },
    attrHooks: {
      type: {
        set: function (e, t) {
          if (!h.radioValue && "radio" === t && N(e, "input")) {
            var n = e.value;
            return e.setAttribute("type", t), n && (e.value = n), t
          }
        }
      }
    },
    removeAttr: function (e, t) {
      var n, r = 0,
        i = t && t.match(M);
      if (i && 1 === e.nodeType)
        while (n = i[r++]) e.removeAttribute(n)
    }
  }), dt = {
    set: function (e, t, n) {
      return !1 === t ? w.removeAttr(e, n) : e.setAttribute(n, n), n
    }
  }, w.each(w.expr.match.bool.source.match(/\w+/g), function (e, t) {
    var n = ht[t] || w.find.attr;
    ht[t] = function (e, t, r) {
      var i, o, a = t.toLowerCase();
      return r || (o = ht[a], ht[a] = i, i = null != n(e, t, r) ? a : null, ht[a] = o), i
    }
  });
  var gt = /^(?:input|select|textarea|button)$/i,
    yt = /^(?:a|area)$/i;
  w.fn.extend({
    prop: function (e, t) {
      return z(this, w.prop, e, t, arguments.length > 1)
    },
    removeProp: function (e) {
      return this.each(function () {
        delete this[w.propFix[e] || e]
      })
    }
  }), w.extend({
    prop: function (e, t, n) {
      var r, i, o = e.nodeType;
      if (3 !== o && 8 !== o && 2 !== o) return 1 === o && w.isXMLDoc(e) || (t = w.propFix[t] || t, i = w.propHooks[t]), void 0 !== n ? i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : e[t] = n : i && "get" in i && null !== (r = i.get(e, t)) ? r : e[t]
    },
    propHooks: {
      tabIndex: {
        get: function (e) {
          var t = w.find.attr(e, "tabindex");
          return t ? parseInt(t, 10) : gt.test(e.nodeName) || yt.test(e.nodeName) && e.href ? 0 : -1
        }
      }
    },
    propFix: {
      "for": "htmlFor",
      "class": "className"
    }
  }), h.optSelected || (w.propHooks.selected = {
    get: function (e) {
      var t = e.parentNode;
      return t && t.parentNode && t.parentNode.selectedIndex, null
    },
    set: function (e) {
      var t = e.parentNode;
      t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex)
    }
  }), w.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function () {
    w.propFix[this.toLowerCase()] = this
  });

  function vt(e) {
    return (e.match(M) || []).join(" ")
  }

  function mt(e) {
    return e.getAttribute && e.getAttribute("class") || ""
  }

  function xt(e) {
    return Array.isArray(e) ? e : "string" == typeof e ? e.match(M) || [] : []
  }
  w.fn.extend({
    addClass: function (e) {
      var t, n, r, i, o, a, s, u = 0;
      if (g(e)) return this.each(function (t) {
        w(this).addClass(e.call(this, t, mt(this)))
      });
      if ((t = xt(e)).length)
        while (n = this[u++])
          if (i = mt(n), r = 1 === n.nodeType && " " + vt(i) + " ") {
            a = 0;
            while (o = t[a++]) r.indexOf(" " + o + " ") < 0 && (r += o + " ");
            i !== (s = vt(r)) && n.setAttribute("class", s)
          } return this
    },
    removeClass: function (e) {
      var t, n, r, i, o, a, s, u = 0;
      if (g(e)) return this.each(function (t) {
        w(this).removeClass(e.call(this, t, mt(this)))
      });
      if (!arguments.length) return this.attr("class", "");
      if ((t = xt(e)).length)
        while (n = this[u++])
          if (i = mt(n), r = 1 === n.nodeType && " " + vt(i) + " ") {
            a = 0;
            while (o = t[a++])
              while (r.indexOf(" " + o + " ") > -1) r = r.replace(" " + o + " ", " ");
            i !== (s = vt(r)) && n.setAttribute("class", s)
          } return this
    },
    toggleClass: function (e, t) {
      var n = typeof e,
        r = "string" === n || Array.isArray(e);
      return "boolean" == typeof t && r ? t ? this.addClass(e) : this.removeClass(e) : g(e) ? this.each(function (n) {
        w(this).toggleClass(e.call(this, n, mt(this), t), t)
      }) : this.each(function () {
        var t, i, o, a;
        if (r) {
          i = 0, o = w(this), a = xt(e);
          while (t = a[i++]) o.hasClass(t) ? o.removeClass(t) : o.addClass(t)
        } else void 0 !== e && "boolean" !== n || ((t = mt(this)) && J.set(this, "__className__", t), this.setAttribute && this.setAttribute("class", t || !1 === e ? "" : J.get(this, "__className__") || ""))
      })
    },
    hasClass: function (e) {
      var t, n, r = 0;
      t = " " + e + " ";
      while (n = this[r++])
        if (1 === n.nodeType && (" " + vt(mt(n)) + " ").indexOf(t) > -1) return !0;
      return !1
    }
  });
  var bt = /\r/g;
  w.fn.extend({
    val: function (e) {
      var t, n, r, i = this[0]; {
        if (arguments.length) return r = g(e), this.each(function (n) {
          var i;
          1 === this.nodeType && (null == (i = r ? e.call(this, n, w(this).val()) : e) ? i = "" : "number" == typeof i ? i += "" : Array.isArray(i) && (i = w.map(i, function (e) {
            return null == e ? "" : e + ""
          })), (t = w.valHooks[this.type] || w.valHooks[this.nodeName.toLowerCase()]) && "set" in t && void 0 !== t.set(this, i, "value") || (this.value = i))
        });
        if (i) return (t = w.valHooks[i.type] || w.valHooks[i.nodeName.toLowerCase()]) && "get" in t && void 0 !== (n = t.get(i, "value")) ? n : "string" == typeof (n = i.value) ? n.replace(bt, "") : null == n ? "" : n
      }
    }
  }), w.extend({
    valHooks: {
      option: {
        get: function (e) {
          var t = w.find.attr(e, "value");
          return null != t ? t : vt(w.text(e))
        }
      },
      select: {
        get: function (e) {
          var t, n, r, i = e.options,
            o = e.selectedIndex,
            a = "select-one" === e.type,
            s = a ? null : [],
            u = a ? o + 1 : i.length;
          for (r = o < 0 ? u : a ? o : 0; r < u; r++)
            if (((n = i[r]).selected || r === o) && !n.disabled && (!n.parentNode.disabled || !N(n.parentNode, "optgroup"))) {
              if (t = w(n).val(), a) return t;
              s.push(t)
            } return s
        },
        set: function (e, t) {
          var n, r, i = e.options,
            o = w.makeArray(t),
            a = i.length;
          while (a--)((r = i[a]).selected = w.inArray(w.valHooks.option.get(r), o) > -1) && (n = !0);
          return n || (e.selectedIndex = -1), o
        }
      }
    }
  }), w.each(["radio", "checkbox"], function () {
    w.valHooks[this] = {
      set: function (e, t) {
        if (Array.isArray(t)) return e.checked = w.inArray(w(e).val(), t) > -1
      }
    }, h.checkOn || (w.valHooks[this].get = function (e) {
      return null === e.getAttribute("value") ? "on" : e.value
    })
  }), h.focusin = "onfocusin" in e;
  var wt = /^(?:focusinfocus|focusoutblur)$/,
    Tt = function (e) {
      e.stopPropagation()
    };
  w.extend(w.event, {
    trigger: function (t, n, i, o) {
      var a, s, u, l, c, p, d, h, v = [i || r],
        m = f.call(t, "type") ? t.type : t,
        x = f.call(t, "namespace") ? t.namespace.split(".") : [];
      if (s = h = u = i = i || r, 3 !== i.nodeType && 8 !== i.nodeType && !wt.test(m + w.event.triggered) && (m.indexOf(".") > -1 && (m = (x = m.split(".")).shift(), x.sort()), c = m.indexOf(":") < 0 && "on" + m, t = t[w.expando] ? t : new w.Event(m, "object" == typeof t && t), t.isTrigger = o ? 2 : 3, t.namespace = x.join("."), t.rnamespace = t.namespace ? new RegExp("(^|\\.)" + x.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = i), n = null == n ? [t] : w.makeArray(n, [t]), d = w.event.special[m] || {}, o || !d.trigger || !1 !== d.trigger.apply(i, n))) {
        if (!o && !d.noBubble && !y(i)) {
          for (l = d.delegateType || m, wt.test(l + m) || (s = s.parentNode); s; s = s.parentNode) v.push(s), u = s;
          u === (i.ownerDocument || r) && v.push(u.defaultView || u.parentWindow || e)
        }
        a = 0;
        while ((s = v[a++]) && !t.isPropagationStopped()) h = s, t.type = a > 1 ? l : d.bindType || m, (p = (J.get(s, "events") || {})[t.type] && J.get(s, "handle")) && p.apply(s, n), (p = c && s[c]) && p.apply && Y(s) && (t.result = p.apply(s, n), !1 === t.result && t.preventDefault());
        return t.type = m, o || t.isDefaultPrevented() || d._default && !1 !== d._default.apply(v.pop(), n) || !Y(i) || c && g(i[m]) && !y(i) && ((u = i[c]) && (i[c] = null), w.event.triggered = m, t.isPropagationStopped() && h.addEventListener(m, Tt), i[m](), t.isPropagationStopped() && h.removeEventListener(m, Tt), w.event.triggered = void 0, u && (i[c] = u)), t.result
      }
    },
    simulate: function (e, t, n) {
      var r = w.extend(new w.Event, n, {
        type: e,
        isSimulated: !0
      });
      w.event.trigger(r, null, t)
    }
  }), w.fn.extend({
    trigger: function (e, t) {
      return this.each(function () {
        w.event.trigger(e, t, this)
      })
    },
    triggerHandler: function (e, t) {
      var n = this[0];
      if (n) return w.event.trigger(e, t, n, !0)
    }
  }), h.focusin || w.each({
    focus: "focusin",
    blur: "focusout"
  }, function (e, t) {
    var n = function (e) {
      w.event.simulate(t, e.target, w.event.fix(e))
    };
    w.event.special[t] = {
      setup: function () {
        var r = this.ownerDocument || this,
          i = J.access(r, t);
        i || r.addEventListener(e, n, !0), J.access(r, t, (i || 0) + 1)
      },
      teardown: function () {
        var r = this.ownerDocument || this,
          i = J.access(r, t) - 1;
        i ? J.access(r, t, i) : (r.removeEventListener(e, n, !0), J.remove(r, t))
      }
    }
  });
  var Ct = e.location,
    Et = Date.now(),
    kt = /\?/;
  w.parseXML = function (t) {
    var n;
    if (!t || "string" != typeof t) return null;
    try {
      n = (new e.DOMParser).parseFromString(t, "text/xml")
    } catch (e) {
      n = void 0
    }
    return n && !n.getElementsByTagName("parsererror").length || w.error("Invalid XML: " + t), n
  };
  var St = /\[\]$/,
    Dt = /\r?\n/g,
    Nt = /^(?:submit|button|image|reset|file)$/i,
    At = /^(?:input|select|textarea|keygen)/i;

  function jt(e, t, n, r) {
    var i;
    if (Array.isArray(t)) w.each(t, function (t, i) {
      n || St.test(e) ? r(e, i) : jt(e + "[" + ("object" == typeof i && null != i ? t : "") + "]", i, n, r)
    });
    else if (n || "object" !== x(t)) r(e, t);
    else
      for (i in t) jt(e + "[" + i + "]", t[i], n, r)
  }
  w.param = function (e, t) {
    var n, r = [],
      i = function (e, t) {
        var n = g(t) ? t() : t;
        r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n)
      };
    if (Array.isArray(e) || e.jquery && !w.isPlainObject(e)) w.each(e, function () {
      i(this.name, this.value)
    });
    else
      for (n in e) jt(n, e[n], t, i);
    return r.join("&")
  }, w.fn.extend({
    serialize: function () {
      return w.param(this.serializeArray())
    },
    serializeArray: function () {
      return this.map(function () {
        var e = w.prop(this, "elements");
        return e ? w.makeArray(e) : this
      }).filter(function () {
        var e = this.type;
        return this.name && !w(this).is(":disabled") && At.test(this.nodeName) && !Nt.test(e) && (this.checked || !pe.test(e))
      }).map(function (e, t) {
        var n = w(this).val();
        return null == n ? null : Array.isArray(n) ? w.map(n, function (e) {
          return {
            name: t.name,
            value: e.replace(Dt, "\r\n")
          }
        }) : {
          name: t.name,
          value: n.replace(Dt, "\r\n")
        }
      }).get()
    }
  });
  var qt = /%20/g,
    Lt = /#.*$/,
    Ht = /([?&])_=[^&]*/,
    Ot = /^(.*?):[ \t]*([^\r\n]*)$/gm,
    Pt = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
    Mt = /^(?:GET|HEAD)$/,
    Rt = /^\/\//,
    It = {},
    Wt = {},
    $t = "*/".concat("*"),
    Bt = r.createElement("a");
  Bt.href = Ct.href;

  function Ft(e) {
    return function (t, n) {
      "string" != typeof t && (n = t, t = "*");
      var r, i = 0,
        o = t.toLowerCase().match(M) || [];
      if (g(n))
        while (r = o[i++]) "+" === r[0] ? (r = r.slice(1) || "*", (e[r] = e[r] || []).unshift(n)) : (e[r] = e[r] || []).push(n)
    }
  }

  function _t(e, t, n, r) {
    var i = {},
      o = e === Wt;

    function a(s) {
      var u;
      return i[s] = !0, w.each(e[s] || [], function (e, s) {
        var l = s(t, n, r);
        return "string" != typeof l || o || i[l] ? o ? !(u = l) : void 0 : (t.dataTypes.unshift(l), a(l), !1)
      }), u
    }
    return a(t.dataTypes[0]) || !i["*"] && a("*")
  }

  function zt(e, t) {
    var n, r, i = w.ajaxSettings.flatOptions || {};
    for (n in t) void 0 !== t[n] && ((i[n] ? e : r || (r = {}))[n] = t[n]);
    return r && w.extend(!0, e, r), e
  }

  function Xt(e, t, n) {
    var r, i, o, a, s = e.contents,
      u = e.dataTypes;
    while ("*" === u[0]) u.shift(), void 0 === r && (r = e.mimeType || t.getResponseHeader("Content-Type"));
    if (r)
      for (i in s)
        if (s[i] && s[i].test(r)) {
          u.unshift(i);
          break
        } if (u[0] in n) o = u[0];
    else {
      for (i in n) {
        if (!u[0] || e.converters[i + " " + u[0]]) {
          o = i;
          break
        }
        a || (a = i)
      }
      o = o || a
    }
    if (o) return o !== u[0] && u.unshift(o), n[o]
  }

  function Ut(e, t, n, r) {
    var i, o, a, s, u, l = {},
      c = e.dataTypes.slice();
    if (c[1])
      for (a in e.converters) l[a.toLowerCase()] = e.converters[a];
    o = c.shift();
    while (o)
      if (e.responseFields[o] && (n[e.responseFields[o]] = t), !u && r && e.dataFilter && (t = e.dataFilter(t, e.dataType)), u = o, o = c.shift())
        if ("*" === o) o = u;
        else if ("*" !== u && u !== o) {
      if (!(a = l[u + " " + o] || l["* " + o]))
        for (i in l)
          if ((s = i.split(" "))[1] === o && (a = l[u + " " + s[0]] || l["* " + s[0]])) {
            !0 === a ? a = l[i] : !0 !== l[i] && (o = s[0], c.unshift(s[1]));
            break
          } if (!0 !== a)
        if (a && e["throws"]) t = a(t);
        else try {
          t = a(t)
        } catch (e) {
          return {
            state: "parsererror",
            error: a ? e : "No conversion from " + u + " to " + o
          }
        }
    }
    return {
      state: "success",
      data: t
    }
  }
  w.extend({
    active: 0,
    lastModified: {},
    etag: {},
    ajaxSettings: {
      url: Ct.href,
      type: "GET",
      isLocal: Pt.test(Ct.protocol),
      global: !0,
      processData: !0,
      async: !0,
      contentType: "application/x-www-form-urlencoded; charset=UTF-8",
      accepts: {
        "*": $t,
        text: "text/plain",
        html: "text/html",
        xml: "application/xml, text/xml",
        json: "application/json, text/javascript"
      },
      contents: {
        xml: /\bxml\b/,
        html: /\bhtml/,
        json: /\bjson\b/
      },
      responseFields: {
        xml: "responseXML",
        text: "responseText",
        json: "responseJSON"
      },
      converters: {
        "* text": String,
        "text html": !0,
        "text json": JSON.parse,
        "text xml": w.parseXML
      },
      flatOptions: {
        url: !0,
        context: !0
      }
    },
    ajaxSetup: function (e, t) {
      return t ? zt(zt(e, w.ajaxSettings), t) : zt(w.ajaxSettings, e)
    },
    ajaxPrefilter: Ft(It),
    ajaxTransport: Ft(Wt),
    ajax: function (t, n) {
      "object" == typeof t && (n = t, t = void 0), n = n || {};
      var i, o, a, s, u, l, c, f, p, d, h = w.ajaxSetup({}, n),
        g = h.context || h,
        y = h.context && (g.nodeType || g.jquery) ? w(g) : w.event,
        v = w.Deferred(),
        m = w.Callbacks("once memory"),
        x = h.statusCode || {},
        b = {},
        T = {},
        C = "canceled",
        E = {
          readyState: 0,
          getResponseHeader: function (e) {
            var t;
            if (c) {
              if (!s) {
                s = {};
                while (t = Ot.exec(a)) s[t[1].toLowerCase()] = t[2]
              }
              t = s[e.toLowerCase()]
            }
            return null == t ? null : t
          },
          getAllResponseHeaders: function () {
            return c ? a : null
          },
          setRequestHeader: function (e, t) {
            return null == c && (e = T[e.toLowerCase()] = T[e.toLowerCase()] || e, b[e] = t), this
          },
          overrideMimeType: function (e) {
            return null == c && (h.mimeType = e), this
          },
          statusCode: function (e) {
            var t;
            if (e)
              if (c) E.always(e[E.status]);
              else
                for (t in e) x[t] = [x[t], e[t]];
            return this
          },
          abort: function (e) {
            var t = e || C;
            return i && i.abort(t), k(0, t), this
          }
        };
      if (v.promise(E), h.url = ((t || h.url || Ct.href) + "").replace(Rt, Ct.protocol + "//"), h.type = n.method || n.type || h.method || h.type, h.dataTypes = (h.dataType || "*").toLowerCase().match(M) || [""], null == h.crossDomain) {
        l = r.createElement("a");
        try {
          l.href = h.url, l.href = l.href, h.crossDomain = Bt.protocol + "//" + Bt.host != l.protocol + "//" + l.host
        } catch (e) {
          h.crossDomain = !0
        }
      }
      if (h.data && h.processData && "string" != typeof h.data && (h.data = w.param(h.data, h.traditional)), _t(It, h, n, E), c) return E;
      (f = w.event && h.global) && 0 == w.active++ && w.event.trigger("ajaxStart"), h.type = h.type.toUpperCase(), h.hasContent = !Mt.test(h.type), o = h.url.replace(Lt, ""), h.hasContent ? h.data && h.processData && 0 === (h.contentType || "").indexOf("application/x-www-form-urlencoded") && (h.data = h.data.replace(qt, "+")) : (d = h.url.slice(o.length), h.data && (h.processData || "string" == typeof h.data) && (o += (kt.test(o) ? "&" : "?") + h.data, delete h.data), !1 === h.cache && (o = o.replace(Ht, "$1"), d = (kt.test(o) ? "&" : "?") + "_=" + Et++ + d), h.url = o + d), h.ifModified && (w.lastModified[o] && E.setRequestHeader("If-Modified-Since", w.lastModified[o]), w.etag[o] && E.setRequestHeader("If-None-Match", w.etag[o])), (h.data && h.hasContent && !1 !== h.contentType || n.contentType) && E.setRequestHeader("Content-Type", h.contentType), E.setRequestHeader("Accept", h.dataTypes[0] && h.accepts[h.dataTypes[0]] ? h.accepts[h.dataTypes[0]] + ("*" !== h.dataTypes[0] ? ", " + $t + "; q=0.01" : "") : h.accepts["*"]);
      for (p in h.headers) E.setRequestHeader(p, h.headers[p]);
      if (h.beforeSend && (!1 === h.beforeSend.call(g, E, h) || c)) return E.abort();
      if (C = "abort", m.add(h.complete), E.done(h.success), E.fail(h.error), i = _t(Wt, h, n, E)) {
        if (E.readyState = 1, f && y.trigger("ajaxSend", [E, h]), c) return E;
        h.async && h.timeout > 0 && (u = e.setTimeout(function () {
          E.abort("timeout")
        }, h.timeout));
        try {
          c = !1, i.send(b, k)
        } catch (e) {
          if (c) throw e;
          k(-1, e)
        }
      } else k(-1, "No Transport");

      function k(t, n, r, s) {
        var l, p, d, b, T, C = n;
        c || (c = !0, u && e.clearTimeout(u), i = void 0, a = s || "", E.readyState = t > 0 ? 4 : 0, l = t >= 200 && t < 300 || 304 === t, r && (b = Xt(h, E, r)), b = Ut(h, b, E, l), l ? (h.ifModified && ((T = E.getResponseHeader("Last-Modified")) && (w.lastModified[o] = T), (T = E.getResponseHeader("etag")) && (w.etag[o] = T)), 204 === t || "HEAD" === h.type ? C = "nocontent" : 304 === t ? C = "notmodified" : (C = b.state, p = b.data, l = !(d = b.error))) : (d = C, !t && C || (C = "error", t < 0 && (t = 0))), E.status = t, E.statusText = (n || C) + "", l ? v.resolveWith(g, [p, C, E]) : v.rejectWith(g, [E, C, d]), E.statusCode(x), x = void 0, f && y.trigger(l ? "ajaxSuccess" : "ajaxError", [E, h, l ? p : d]), m.fireWith(g, [E, C]), f && (y.trigger("ajaxComplete", [E, h]), --w.active || w.event.trigger("ajaxStop")))
      }
      return E
    },
    getJSON: function (e, t, n) {
      return w.get(e, t, n, "json")
    },
    getScript: function (e, t) {
      return w.get(e, void 0, t, "script")
    }
  }), w.each(["get", "post"], function (e, t) {
    w[t] = function (e, n, r, i) {
      return g(n) && (i = i || r, r = n, n = void 0), w.ajax(w.extend({
        url: e,
        type: t,
        dataType: i,
        data: n,
        success: r
      }, w.isPlainObject(e) && e))
    }
  }), w._evalUrl = function (e) {
    return w.ajax({
      url: e,
      type: "GET",
      dataType: "script",
      cache: !0,
      async: !1,
      global: !1,
      "throws": !0
    })
  }, w.fn.extend({
    wrapAll: function (e) {
      var t;
      return this[0] && (g(e) && (e = e.call(this[0])), t = w(e, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map(function () {
        var e = this;
        while (e.firstElementChild) e = e.firstElementChild;
        return e
      }).append(this)), this
    },
    wrapInner: function (e) {
      return g(e) ? this.each(function (t) {
        w(this).wrapInner(e.call(this, t))
      }) : this.each(function () {
        var t = w(this),
          n = t.contents();
        n.length ? n.wrapAll(e) : t.append(e)
      })
    },
    wrap: function (e) {
      var t = g(e);
      return this.each(function (n) {
        w(this).wrapAll(t ? e.call(this, n) : e)
      })
    },
    unwrap: function (e) {
      return this.parent(e).not("body").each(function () {
        w(this).replaceWith(this.childNodes)
      }), this
    }
  }), w.expr.pseudos.hidden = function (e) {
    return !w.expr.pseudos.visible(e)
  }, w.expr.pseudos.visible = function (e) {
    return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length)
  }, w.ajaxSettings.xhr = function () {
    try {
      return new e.XMLHttpRequest
    } catch (e) {}
  };
  var Vt = {
      0: 200,
      1223: 204
    },
    Gt = w.ajaxSettings.xhr();
  h.cors = !!Gt && "withCredentials" in Gt, h.ajax = Gt = !!Gt, w.ajaxTransport(function (t) {
    var n, r;
    if (h.cors || Gt && !t.crossDomain) return {
      send: function (i, o) {
        var a, s = t.xhr();
        if (s.open(t.type, t.url, t.async, t.username, t.password), t.xhrFields)
          for (a in t.xhrFields) s[a] = t.xhrFields[a];
        t.mimeType && s.overrideMimeType && s.overrideMimeType(t.mimeType), t.crossDomain || i["X-Requested-With"] || (i["X-Requested-With"] = "XMLHttpRequest");
        for (a in i) s.setRequestHeader(a, i[a]);
        n = function (e) {
          return function () {
            n && (n = r = s.onload = s.onerror = s.onabort = s.ontimeout = s.onreadystatechange = null, "abort" === e ? s.abort() : "error" === e ? "number" != typeof s.status ? o(0, "error") : o(s.status, s.statusText) : o(Vt[s.status] || s.status, s.statusText, "text" !== (s.responseType || "text") || "string" != typeof s.responseText ? {
              binary: s.response
            } : {
              text: s.responseText
            }, s.getAllResponseHeaders()))
          }
        }, s.onload = n(), r = s.onerror = s.ontimeout = n("error"), void 0 !== s.onabort ? s.onabort = r : s.onreadystatechange = function () {
          4 === s.readyState && e.setTimeout(function () {
            n && r()
          })
        }, n = n("abort");
        try {
          s.send(t.hasContent && t.data || null)
        } catch (e) {
          if (n) throw e
        }
      },
      abort: function () {
        n && n()
      }
    }
  }), w.ajaxPrefilter(function (e) {
    e.crossDomain && (e.contents.script = !1)
  }), w.ajaxSetup({
    accepts: {
      script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
    },
    contents: {
      script: /\b(?:java|ecma)script\b/
    },
    converters: {
      "text script": function (e) {
        return w.globalEval(e), e
      }
    }
  }), w.ajaxPrefilter("script", function (e) {
    void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET")
  }), w.ajaxTransport("script", function (e) {
    if (e.crossDomain) {
      var t, n;
      return {
        send: function (i, o) {
          t = w("<script>").prop({
            charset: e.scriptCharset,
            src: e.url
          }).on("load error", n = function (e) {
            t.remove(), n = null, e && o("error" === e.type ? 404 : 200, e.type)
          }), r.head.appendChild(t[0])
        },
        abort: function () {
          n && n()
        }
      }
    }
  });
  var Yt = [],
    Qt = /(=)\?(?=&|$)|\?\?/;
  w.ajaxSetup({
    jsonp: "callback",
    jsonpCallback: function () {
      var e = Yt.pop() || w.expando + "_" + Et++;
      return this[e] = !0, e
    }
  }), w.ajaxPrefilter("json jsonp", function (t, n, r) {
    var i, o, a, s = !1 !== t.jsonp && (Qt.test(t.url) ? "url" : "string" == typeof t.data && 0 === (t.contentType || "").indexOf("application/x-www-form-urlencoded") && Qt.test(t.data) && "data");
    if (s || "jsonp" === t.dataTypes[0]) return i = t.jsonpCallback = g(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, s ? t[s] = t[s].replace(Qt, "$1" + i) : !1 !== t.jsonp && (t.url += (kt.test(t.url) ? "&" : "?") + t.jsonp + "=" + i), t.converters["script json"] = function () {
      return a || w.error(i + " was not called"), a[0]
    }, t.dataTypes[0] = "json", o = e[i], e[i] = function () {
      a = arguments
    }, r.always(function () {
      void 0 === o ? w(e).removeProp(i) : e[i] = o, t[i] && (t.jsonpCallback = n.jsonpCallback, Yt.push(i)), a && g(o) && o(a[0]), a = o = void 0
    }), "script"
  }), h.createHTMLDocument = function () {
    var e = r.implementation.createHTMLDocument("").body;
    return e.innerHTML = "<form></form><form></form>", 2 === e.childNodes.length
  }(), w.parseHTML = function (e, t, n) {
    if ("string" != typeof e) return [];
    "boolean" == typeof t && (n = t, t = !1);
    var i, o, a;
    return t || (h.createHTMLDocument ? ((i = (t = r.implementation.createHTMLDocument("")).createElement("base")).href = r.location.href, t.head.appendChild(i)) : t = r), o = A.exec(e), a = !n && [], o ? [t.createElement(o[1])] : (o = xe([e], t, a), a && a.length && w(a).remove(), w.merge([], o.childNodes))
  }, w.fn.load = function (e, t, n) {
    var r, i, o, a = this,
      s = e.indexOf(" ");
    return s > -1 && (r = vt(e.slice(s)), e = e.slice(0, s)), g(t) ? (n = t, t = void 0) : t && "object" == typeof t && (i = "POST"), a.length > 0 && w.ajax({
      url: e,
      type: i || "GET",
      dataType: "html",
      data: t
    }).done(function (e) {
      o = arguments, a.html(r ? w("<div>").append(w.parseHTML(e)).find(r) : e)
    }).always(n && function (e, t) {
      a.each(function () {
        n.apply(this, o || [e.responseText, t, e])
      })
    }), this
  }, w.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function (e, t) {
    w.fn[t] = function (e) {
      return this.on(t, e)
    }
  }), w.expr.pseudos.animated = function (e) {
    return w.grep(w.timers, function (t) {
      return e === t.elem
    }).length
  }, w.offset = {
    setOffset: function (e, t, n) {
      var r, i, o, a, s, u, l, c = w.css(e, "position"),
        f = w(e),
        p = {};
      "static" === c && (e.style.position = "relative"), s = f.offset(), o = w.css(e, "top"), u = w.css(e, "left"), (l = ("absolute" === c || "fixed" === c) && (o + u).indexOf("auto") > -1) ? (a = (r = f.position()).top, i = r.left) : (a = parseFloat(o) || 0, i = parseFloat(u) || 0), g(t) && (t = t.call(e, n, w.extend({}, s))), null != t.top && (p.top = t.top - s.top + a), null != t.left && (p.left = t.left - s.left + i), "using" in t ? t.using.call(e, p) : f.css(p)
    }
  }, w.fn.extend({
    offset: function (e) {
      if (arguments.length) return void 0 === e ? this : this.each(function (t) {
        w.offset.setOffset(this, e, t)
      });
      var t, n, r = this[0];
      if (r) return r.getClientRects().length ? (t = r.getBoundingClientRect(), n = r.ownerDocument.defaultView, {
        top: t.top + n.pageYOffset,
        left: t.left + n.pageXOffset
      }) : {
        top: 0,
        left: 0
      }
    },
    position: function () {
      if (this[0]) {
        var e, t, n, r = this[0],
          i = {
            top: 0,
            left: 0
          };
        if ("fixed" === w.css(r, "position")) t = r.getBoundingClientRect();
        else {
          t = this.offset(), n = r.ownerDocument, e = r.offsetParent || n.documentElement;
          while (e && (e === n.body || e === n.documentElement) && "static" === w.css(e, "position")) e = e.parentNode;
          e && e !== r && 1 === e.nodeType && ((i = w(e).offset()).top += w.css(e, "borderTopWidth", !0), i.left += w.css(e, "borderLeftWidth", !0))
        }
        return {
          top: t.top - i.top - w.css(r, "marginTop", !0),
          left: t.left - i.left - w.css(r, "marginLeft", !0)
        }
      }
    },
    offsetParent: function () {
      return this.map(function () {
        var e = this.offsetParent;
        while (e && "static" === w.css(e, "position")) e = e.offsetParent;
        return e || be
      })
    }
  }), w.each({
    scrollLeft: "pageXOffset",
    scrollTop: "pageYOffset"
  }, function (e, t) {
    var n = "pageYOffset" === t;
    w.fn[e] = function (r) {
      return z(this, function (e, r, i) {
        var o;
        if (y(e) ? o = e : 9 === e.nodeType && (o = e.defaultView), void 0 === i) return o ? o[t] : e[r];
        o ? o.scrollTo(n ? o.pageXOffset : i, n ? i : o.pageYOffset) : e[r] = i
      }, e, r, arguments.length)
    }
  }), w.each(["top", "left"], function (e, t) {
    w.cssHooks[t] = _e(h.pixelPosition, function (e, n) {
      if (n) return n = Fe(e, t), We.test(n) ? w(e).position()[t] + "px" : n
    })
  }), w.each({
    Height: "height",
    Width: "width"
  }, function (e, t) {
    w.each({
      padding: "inner" + e,
      content: t,
      "": "outer" + e
    }, function (n, r) {
      w.fn[r] = function (i, o) {
        var a = arguments.length && (n || "boolean" != typeof i),
          s = n || (!0 === i || !0 === o ? "margin" : "border");
        return z(this, function (t, n, i) {
          var o;
          return y(t) ? 0 === r.indexOf("outer") ? t["inner" + e] : t.document.documentElement["client" + e] : 9 === t.nodeType ? (o = t.documentElement, Math.max(t.body["scroll" + e], o["scroll" + e], t.body["offset" + e], o["offset" + e], o["client" + e])) : void 0 === i ? w.css(t, n, s) : w.style(t, n, i, s)
        }, t, a ? i : void 0, a)
      }
    })
  }), w.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function (e, t) {
    w.fn[t] = function (e, n) {
      return arguments.length > 0 ? this.on(t, null, e, n) : this.trigger(t)
    }
  }), w.fn.extend({
    hover: function (e, t) {
      return this.mouseenter(e).mouseleave(t || e)
    }
  }), w.fn.extend({
    bind: function (e, t, n) {
      return this.on(e, null, t, n)
    },
    unbind: function (e, t) {
      return this.off(e, null, t)
    },
    delegate: function (e, t, n, r) {
      return this.on(t, e, n, r)
    },
    undelegate: function (e, t, n) {
      return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n)
    }
  }), w.proxy = function (e, t) {
    var n, r, i;
    if ("string" == typeof t && (n = e[t], t = e, e = n), g(e)) return r = o.call(arguments, 2), i = function () {
      return e.apply(t || this, r.concat(o.call(arguments)))
    }, i.guid = e.guid = e.guid || w.guid++, i
  }, w.holdReady = function (e) {
    e ? w.readyWait++ : w.ready(!0)
  }, w.isArray = Array.isArray, w.parseJSON = JSON.parse, w.nodeName = N, w.isFunction = g, w.isWindow = y, w.camelCase = G, w.type = x, w.now = Date.now, w.isNumeric = function (e) {
    var t = w.type(e);
    return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e))
  }, "function" == typeof define && define.amd && define("jquery", [], function () {
    return w
  });
  var Jt = e.jQuery,
    Kt = e.$;
  return w.noConflict = function (t) {
    return e.$ === w && (e.$ = Kt), t && e.jQuery === w && (e.jQuery = Jt), w
  }, t || (e.jQuery = e.$ = w), w
});
/*!
 * Bootstrap v4.2.1 (https://getbootstrap.com/)
 * Copyright 2011-2018 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
! function (t, e) {
  "object" == typeof exports && "undefined" != typeof module ? e(exports, require("jquery")) : "function" == typeof define && define.amd ? define(["exports", "jquery"], e) : e(t.bootstrap = {}, t.jQuery)
}(this, function (t, p) {
  "use strict";

  function i(t, e) {
    for (var n = 0; n < e.length; n++) {
      var i = e[n];
      i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
    }
  }

  function s(t, e, n) {
    return e && i(t.prototype, e), n && i(t, n), t
  }

  function l(o) {
    for (var t = 1; t < arguments.length; t++) {
      var r = null != arguments[t] ? arguments[t] : {},
        e = Object.keys(r);
      "function" == typeof Object.getOwnPropertySymbols && (e = e.concat(Object.getOwnPropertySymbols(r).filter(function (t) {
        return Object.getOwnPropertyDescriptor(r, t).enumerable
      }))), e.forEach(function (t) {
        var e, n, i;
        e = o, i = r[n = t], n in e ? Object.defineProperty(e, n, {
          value: i,
          enumerable: !0,
          configurable: !0,
          writable: !0
        }) : e[n] = i
      })
    }
    return o
  }
  p = p && p.hasOwnProperty("default") ? p.default : p;
  var e = "transitionend";

  function n(t) {
    var e = this,
      n = !1;
    return p(this).one(m.TRANSITION_END, function () {
      n = !0
    }), setTimeout(function () {
      n || m.triggerTransitionEnd(e)
    }, t), this
  }
  var m = {
    TRANSITION_END: "bsTransitionEnd",
    getUID: function (t) {
      for (; t += ~~(1e6 * Math.random()), document.getElementById(t););
      return t
    },
    getSelectorFromElement: function (t) {
      var e = t.getAttribute("data-target");
      if (!e || "#" === e) {
        var n = t.getAttribute("href");
        e = n && "#" !== n ? n.trim() : ""
      }
      return e && document.querySelector(e) ? e : null
    },
    getTransitionDurationFromElement: function (t) {
      if (!t) return 0;
      var e = p(t).css("transition-duration"),
        n = p(t).css("transition-delay"),
        i = parseFloat(e),
        o = parseFloat(n);
      return i || o ? (e = e.split(",")[0], n = n.split(",")[0], 1e3 * (parseFloat(e) + parseFloat(n))) : 0
    },
    reflow: function (t) {
      return t.offsetHeight
    },
    triggerTransitionEnd: function (t) {
      p(t).trigger(e)
    },
    supportsTransitionEnd: function () {
      return Boolean(e)
    },
    isElement: function (t) {
      return (t[0] || t).nodeType
    },
    typeCheckConfig: function (t, e, n) {
      for (var i in n)
        if (Object.prototype.hasOwnProperty.call(n, i)) {
          var o = n[i],
            r = e[i],
            s = r && m.isElement(r) ? "element" : (a = r, {}.toString.call(a).match(/\s([a-z]+)/i)[1].toLowerCase());
          if (!new RegExp(o).test(s)) throw new Error(t.toUpperCase() + ': Option "' + i + '" provided type "' + s + '" but expected type "' + o + '".')
        } var a
    },
    findShadowRoot: function (t) {
      if (!document.documentElement.attachShadow) return null;
      if ("function" != typeof t.getRootNode) return t instanceof ShadowRoot ? t : t.parentNode ? m.findShadowRoot(t.parentNode) : null;
      var e = t.getRootNode();
      return e instanceof ShadowRoot ? e : null
    }
  };
  p.fn.emulateTransitionEnd = n, p.event.special[m.TRANSITION_END] = {
    bindType: e,
    delegateType: e,
    handle: function (t) {
      if (p(t.target).is(this)) return t.handleObj.handler.apply(this, arguments)
    }
  };
  var o = "alert",
    r = "bs.alert",
    a = "." + r,
    c = p.fn[o],
    h = {
      CLOSE: "close" + a,
      CLOSED: "closed" + a,
      CLICK_DATA_API: "click" + a + ".data-api"
    },
    u = "alert",
    f = "fade",
    d = "show",
    g = function () {
      function i(t) {
        this._element = t
      }
      var t = i.prototype;
      return t.close = function (t) {
        var e = this._element;
        t && (e = this._getRootElement(t)), this._triggerCloseEvent(e).isDefaultPrevented() || this._removeElement(e)
      }, t.dispose = function () {
        p.removeData(this._element, r), this._element = null
      }, t._getRootElement = function (t) {
        var e = m.getSelectorFromElement(t),
          n = !1;
        return e && (n = document.querySelector(e)), n || (n = p(t).closest("." + u)[0]), n
      }, t._triggerCloseEvent = function (t) {
        var e = p.Event(h.CLOSE);
        return p(t).trigger(e), e
      }, t._removeElement = function (e) {
        var n = this;
        if (p(e).removeClass(d), p(e).hasClass(f)) {
          var t = m.getTransitionDurationFromElement(e);
          p(e).one(m.TRANSITION_END, function (t) {
            return n._destroyElement(e, t)
          }).emulateTransitionEnd(t)
        } else this._destroyElement(e)
      }, t._destroyElement = function (t) {
        p(t).detach().trigger(h.CLOSED).remove()
      }, i._jQueryInterface = function (n) {
        return this.each(function () {
          var t = p(this),
            e = t.data(r);
          e || (e = new i(this), t.data(r, e)), "close" === n && e[n](this)
        })
      }, i._handleDismiss = function (e) {
        return function (t) {
          t && t.preventDefault(), e.close(this)
        }
      }, s(i, null, [{
        key: "VERSION",
        get: function () {
          return "4.2.1"
        }
      }]), i
    }();
  p(document).on(h.CLICK_DATA_API, '[data-dismiss="alert"]', g._handleDismiss(new g)), p.fn[o] = g._jQueryInterface, p.fn[o].Constructor = g, p.fn[o].noConflict = function () {
    return p.fn[o] = c, g._jQueryInterface
  };
  var _ = "button",
    v = "bs.button",
    y = "." + v,
    E = ".data-api",
    b = p.fn[_],
    w = "active",
    T = "btn",
    C = "focus",
    S = '[data-toggle^="button"]',
    D = '[data-toggle="buttons"]',
    I = 'input:not([type="hidden"])',
    A = ".active",
    O = ".btn",
    N = {
      CLICK_DATA_API: "click" + y + E,
      FOCUS_BLUR_DATA_API: "focus" + y + E + " blur" + y + E
    },
    k = function () {
      function n(t) {
        this._element = t
      }
      var t = n.prototype;
      return t.toggle = function () {
        var t = !0,
          e = !0,
          n = p(this._element).closest(D)[0];
        if (n) {
          var i = this._element.querySelector(I);
          if (i) {
            if ("radio" === i.type)
              if (i.checked && this._element.classList.contains(w)) t = !1;
              else {
                var o = n.querySelector(A);
                o && p(o).removeClass(w)
              } if (t) {
              if (i.hasAttribute("disabled") || n.hasAttribute("disabled") || i.classList.contains("disabled") || n.classList.contains("disabled")) return;
              i.checked = !this._element.classList.contains(w), p(i).trigger("change")
            }
            i.focus(), e = !1
          }
        }
        e && this._element.setAttribute("aria-pressed", !this._element.classList.contains(w)), t && p(this._element).toggleClass(w)
      }, t.dispose = function () {
        p.removeData(this._element, v), this._element = null
      }, n._jQueryInterface = function (e) {
        return this.each(function () {
          var t = p(this).data(v);
          t || (t = new n(this), p(this).data(v, t)), "toggle" === e && t[e]()
        })
      }, s(n, null, [{
        key: "VERSION",
        get: function () {
          return "4.2.1"
        }
      }]), n
    }();
  p(document).on(N.CLICK_DATA_API, S, function (t) {
    t.preventDefault();
    var e = t.target;
    p(e).hasClass(T) || (e = p(e).closest(O)), k._jQueryInterface.call(p(e), "toggle")
  }).on(N.FOCUS_BLUR_DATA_API, S, function (t) {
    var e = p(t.target).closest(O)[0];
    p(e).toggleClass(C, /^focus(in)?$/.test(t.type))
  }), p.fn[_] = k._jQueryInterface, p.fn[_].Constructor = k, p.fn[_].noConflict = function () {
    return p.fn[_] = b, k._jQueryInterface
  };
  var L = "carousel",
    P = "bs.carousel",
    x = "." + P,
    H = ".data-api",
    j = p.fn[L],
    R = {
      interval: 5e3,
      keyboard: !0,
      slide: !1,
      pause: "hover",
      wrap: !0,
      touch: !0
    },
    F = {
      interval: "(number|boolean)",
      keyboard: "boolean",
      slide: "(boolean|string)",
      pause: "(string|boolean)",
      wrap: "boolean",
      touch: "boolean"
    },
    M = "next",
    W = "prev",
    U = "left",
    B = "right",
    q = {
      SLIDE: "slide" + x,
      SLID: "slid" + x,
      KEYDOWN: "keydown" + x,
      MOUSEENTER: "mouseenter" + x,
      MOUSELEAVE: "mouseleave" + x,
      TOUCHSTART: "touchstart" + x,
      TOUCHMOVE: "touchmove" + x,
      TOUCHEND: "touchend" + x,
      POINTERDOWN: "pointerdown" + x,
      POINTERUP: "pointerup" + x,
      DRAG_START: "dragstart" + x,
      LOAD_DATA_API: "load" + x + H,
      CLICK_DATA_API: "click" + x + H
    },
    K = "carousel",
    Q = "active",
    Y = "slide",
    V = "carousel-item-right",
    X = "carousel-item-left",
    z = "carousel-item-next",
    G = "carousel-item-prev",
    J = "pointer-event",
    Z = ".active",
    $ = ".active.carousel-item",
    tt = ".carousel-item",
    et = ".carousel-item img",
    nt = ".carousel-item-next, .carousel-item-prev",
    it = ".carousel-indicators",
    ot = "[data-slide], [data-slide-to]",
    rt = '[data-ride="carousel"]',
    st = {
      TOUCH: "touch",
      PEN: "pen"
    },
    at = function () {
      function r(t, e) {
        this._items = null, this._interval = null, this._activeElement = null, this._isPaused = !1, this._isSliding = !1, this.touchTimeout = null, this.touchStartX = 0, this.touchDeltaX = 0, this._config = this._getConfig(e), this._element = t, this._indicatorsElement = this._element.querySelector(it), this._touchSupported = "ontouchstart" in document.documentElement || 0 < navigator.maxTouchPoints, this._pointerEvent = Boolean(window.PointerEvent || window.MSPointerEvent), this._addEventListeners()
      }
      var t = r.prototype;
      return t.next = function () {
        this._isSliding || this._slide(M)
      }, t.nextWhenVisible = function () {
        !document.hidden && p(this._element).is(":visible") && "hidden" !== p(this._element).css("visibility") && this.next()
      }, t.prev = function () {
        this._isSliding || this._slide(W)
      }, t.pause = function (t) {
        t || (this._isPaused = !0), this._element.querySelector(nt) && (m.triggerTransitionEnd(this._element), this.cycle(!0)), clearInterval(this._interval), this._interval = null
      }, t.cycle = function (t) {
        t || (this._isPaused = !1), this._interval && (clearInterval(this._interval), this._interval = null), this._config.interval && !this._isPaused && (this._interval = setInterval((document.visibilityState ? this.nextWhenVisible : this.next).bind(this), this._config.interval))
      }, t.to = function (t) {
        var e = this;
        this._activeElement = this._element.querySelector($);
        var n = this._getItemIndex(this._activeElement);
        if (!(t > this._items.length - 1 || t < 0))
          if (this._isSliding) p(this._element).one(q.SLID, function () {
            return e.to(t)
          });
          else {
            if (n === t) return this.pause(), void this.cycle();
            var i = n < t ? M : W;
            this._slide(i, this._items[t])
          }
      }, t.dispose = function () {
        p(this._element).off(x), p.removeData(this._element, P), this._items = null, this._config = null, this._element = null, this._interval = null, this._isPaused = null, this._isSliding = null, this._activeElement = null, this._indicatorsElement = null
      }, t._getConfig = function (t) {
        return t = l({}, R, t), m.typeCheckConfig(L, t, F), t
      }, t._handleSwipe = function () {
        var t = Math.abs(this.touchDeltaX);
        if (!(t <= 40)) {
          var e = t / this.touchDeltaX;
          0 < e && this.prev(), e < 0 && this.next()
        }
      }, t._addEventListeners = function () {
        var e = this;
        this._config.keyboard && p(this._element).on(q.KEYDOWN, function (t) {
          return e._keydown(t)
        }), "hover" === this._config.pause && p(this._element).on(q.MOUSEENTER, function (t) {
          return e.pause(t)
        }).on(q.MOUSELEAVE, function (t) {
          return e.cycle(t)
        }), this._addTouchEventListeners()
      }, t._addTouchEventListeners = function () {
        var n = this;
        if (this._touchSupported) {
          var e = function (t) {
              n._pointerEvent && st[t.originalEvent.pointerType.toUpperCase()] ? n.touchStartX = t.originalEvent.clientX : n._pointerEvent || (n.touchStartX = t.originalEvent.touches[0].clientX)
            },
            i = function (t) {
              n._pointerEvent && st[t.originalEvent.pointerType.toUpperCase()] && (n.touchDeltaX = t.originalEvent.clientX - n.touchStartX), n._handleSwipe(), "hover" === n._config.pause && (n.pause(), n.touchTimeout && clearTimeout(n.touchTimeout), n.touchTimeout = setTimeout(function (t) {
                return n.cycle(t)
              }, 500 + n._config.interval))
            };
          p(this._element.querySelectorAll(et)).on(q.DRAG_START, function (t) {
            return t.preventDefault()
          }), this._pointerEvent ? (p(this._element).on(q.POINTERDOWN, function (t) {
            return e(t)
          }), p(this._element).on(q.POINTERUP, function (t) {
            return i(t)
          }), this._element.classList.add(J)) : (p(this._element).on(q.TOUCHSTART, function (t) {
            return e(t)
          }), p(this._element).on(q.TOUCHMOVE, function (t) {
            var e;
            (e = t).originalEvent.touches && 1 < e.originalEvent.touches.length ? n.touchDeltaX = 0 : n.touchDeltaX = e.originalEvent.touches[0].clientX - n.touchStartX
          }), p(this._element).on(q.TOUCHEND, function (t) {
            return i(t)
          }))
        }
      }, t._keydown = function (t) {
        if (!/input|textarea/i.test(t.target.tagName)) switch (t.which) {
          case 37:
            t.preventDefault(), this.prev();
            break;
          case 39:
            t.preventDefault(), this.next()
        }
      }, t._getItemIndex = function (t) {
        return this._items = t && t.parentNode ? [].slice.call(t.parentNode.querySelectorAll(tt)) : [], this._items.indexOf(t)
      }, t._getItemByDirection = function (t, e) {
        var n = t === M,
          i = t === W,
          o = this._getItemIndex(e),
          r = this._items.length - 1;
        if ((i && 0 === o || n && o === r) && !this._config.wrap) return e;
        var s = (o + (t === W ? -1 : 1)) % this._items.length;
        return -1 === s ? this._items[this._items.length - 1] : this._items[s]
      }, t._triggerSlideEvent = function (t, e) {
        var n = this._getItemIndex(t),
          i = this._getItemIndex(this._element.querySelector($)),
          o = p.Event(q.SLIDE, {
            relatedTarget: t,
            direction: e,
            from: i,
            to: n
          });
        return p(this._element).trigger(o), o
      }, t._setActiveIndicatorElement = function (t) {
        if (this._indicatorsElement) {
          var e = [].slice.call(this._indicatorsElement.querySelectorAll(Z));
          p(e).removeClass(Q);
          var n = this._indicatorsElement.children[this._getItemIndex(t)];
          n && p(n).addClass(Q)
        }
      }, t._slide = function (t, e) {
        var n, i, o, r = this,
          s = this._element.querySelector($),
          a = this._getItemIndex(s),
          l = e || s && this._getItemByDirection(t, s),
          c = this._getItemIndex(l),
          h = Boolean(this._interval);
        if (o = t === M ? (n = X, i = z, U) : (n = V, i = G, B), l && p(l).hasClass(Q)) this._isSliding = !1;
        else if (!this._triggerSlideEvent(l, o).isDefaultPrevented() && s && l) {
          this._isSliding = !0, h && this.pause(), this._setActiveIndicatorElement(l);
          var u = p.Event(q.SLID, {
            relatedTarget: l,
            direction: o,
            from: a,
            to: c
          });
          if (p(this._element).hasClass(Y)) {
            p(l).addClass(i), m.reflow(l), p(s).addClass(n), p(l).addClass(n);
            var f = parseInt(l.getAttribute("data-interval"), 10);
            this._config.interval = f ? (this._config.defaultInterval = this._config.defaultInterval || this._config.interval, f) : this._config.defaultInterval || this._config.interval;
            var d = m.getTransitionDurationFromElement(s);
            p(s).one(m.TRANSITION_END, function () {
              p(l).removeClass(n + " " + i).addClass(Q), p(s).removeClass(Q + " " + i + " " + n), r._isSliding = !1, setTimeout(function () {
                return p(r._element).trigger(u)
              }, 0)
            }).emulateTransitionEnd(d)
          } else p(s).removeClass(Q), p(l).addClass(Q), this._isSliding = !1, p(this._element).trigger(u);
          h && this.cycle()
        }
      }, r._jQueryInterface = function (i) {
        return this.each(function () {
          var t = p(this).data(P),
            e = l({}, R, p(this).data());
          "object" == typeof i && (e = l({}, e, i));
          var n = "string" == typeof i ? i : e.slide;
          if (t || (t = new r(this, e), p(this).data(P, t)), "number" == typeof i) t.to(i);
          else if ("string" == typeof n) {
            if ("undefined" == typeof t[n]) throw new TypeError('No method named "' + n + '"');
            t[n]()
          } else e.interval && (t.pause(), t.cycle())
        })
      }, r._dataApiClickHandler = function (t) {
        var e = m.getSelectorFromElement(this);
        if (e) {
          var n = p(e)[0];
          if (n && p(n).hasClass(K)) {
            var i = l({}, p(n).data(), p(this).data()),
              o = this.getAttribute("data-slide-to");
            o && (i.interval = !1), r._jQueryInterface.call(p(n), i), o && p(n).data(P).to(o), t.preventDefault()
          }
        }
      }, s(r, null, [{
        key: "VERSION",
        get: function () {
          return "4.2.1"
        }
      }, {
        key: "Default",
        get: function () {
          return R
        }
      }]), r
    }();
  p(document).on(q.CLICK_DATA_API, ot, at._dataApiClickHandler), p(window).on(q.LOAD_DATA_API, function () {
    for (var t = [].slice.call(document.querySelectorAll(rt)), e = 0, n = t.length; e < n; e++) {
      var i = p(t[e]);
      at._jQueryInterface.call(i, i.data())
    }
  }), p.fn[L] = at._jQueryInterface, p.fn[L].Constructor = at, p.fn[L].noConflict = function () {
    return p.fn[L] = j, at._jQueryInterface
  };
  var lt = "collapse",
    ct = "bs.collapse",
    ht = "." + ct,
    ut = p.fn[lt],
    ft = {
      toggle: !0,
      parent: ""
    },
    dt = {
      toggle: "boolean",
      parent: "(string|element)"
    },
    pt = {
      SHOW: "show" + ht,
      SHOWN: "shown" + ht,
      HIDE: "hide" + ht,
      HIDDEN: "hidden" + ht,
      CLICK_DATA_API: "click" + ht + ".data-api"
    },
    mt = "show",
    gt = "collapse",
    _t = "collapsing",
    vt = "collapsed",
    yt = "width",
    Et = "height",
    bt = ".show, .collapsing",
    wt = '[data-toggle="collapse"]',
    Tt = function () {
      function a(e, t) {
        this._isTransitioning = !1, this._element = e, this._config = this._getConfig(t), this._triggerArray = [].slice.call(document.querySelectorAll('[data-toggle="collapse"][href="#' + e.id + '"],[data-toggle="collapse"][data-target="#' + e.id + '"]'));
        for (var n = [].slice.call(document.querySelectorAll(wt)), i = 0, o = n.length; i < o; i++) {
          var r = n[i],
            s = m.getSelectorFromElement(r),
            a = [].slice.call(document.querySelectorAll(s)).filter(function (t) {
              return t === e
            });
          null !== s && 0 < a.length && (this._selector = s, this._triggerArray.push(r))
        }
        this._parent = this._config.parent ? this._getParent() : null, this._config.parent || this._addAriaAndCollapsedClass(this._element, this._triggerArray), this._config.toggle && this.toggle()
      }
      var t = a.prototype;
      return t.toggle = function () {
        p(this._element).hasClass(mt) ? this.hide() : this.show()
      }, t.show = function () {
        var t, e, n = this;
        if (!this._isTransitioning && !p(this._element).hasClass(mt) && (this._parent && 0 === (t = [].slice.call(this._parent.querySelectorAll(bt)).filter(function (t) {
            return "string" == typeof n._config.parent ? t.getAttribute("data-parent") === n._config.parent : t.classList.contains(gt)
          })).length && (t = null), !(t && (e = p(t).not(this._selector).data(ct)) && e._isTransitioning))) {
          var i = p.Event(pt.SHOW);
          if (p(this._element).trigger(i), !i.isDefaultPrevented()) {
            t && (a._jQueryInterface.call(p(t).not(this._selector), "hide"), e || p(t).data(ct, null));
            var o = this._getDimension();
            p(this._element).removeClass(gt).addClass(_t), this._element.style[o] = 0, this._triggerArray.length && p(this._triggerArray).removeClass(vt).attr("aria-expanded", !0), this.setTransitioning(!0);
            var r = "scroll" + (o[0].toUpperCase() + o.slice(1)),
              s = m.getTransitionDurationFromElement(this._element);
            p(this._element).one(m.TRANSITION_END, function () {
              p(n._element).removeClass(_t).addClass(gt).addClass(mt), n._element.style[o] = "", n.setTransitioning(!1), p(n._element).trigger(pt.SHOWN)
            }).emulateTransitionEnd(s), this._element.style[o] = this._element[r] + "px"
          }
        }
      }, t.hide = function () {
        var t = this;
        if (!this._isTransitioning && p(this._element).hasClass(mt)) {
          var e = p.Event(pt.HIDE);
          if (p(this._element).trigger(e), !e.isDefaultPrevented()) {
            var n = this._getDimension();
            this._element.style[n] = this._element.getBoundingClientRect()[n] + "px", m.reflow(this._element), p(this._element).addClass(_t).removeClass(gt).removeClass(mt);
            var i = this._triggerArray.length;
            if (0 < i)
              for (var o = 0; o < i; o++) {
                var r = this._triggerArray[o],
                  s = m.getSelectorFromElement(r);
                if (null !== s) p([].slice.call(document.querySelectorAll(s))).hasClass(mt) || p(r).addClass(vt).attr("aria-expanded", !1)
              }
            this.setTransitioning(!0);
            this._element.style[n] = "";
            var a = m.getTransitionDurationFromElement(this._element);
            p(this._element).one(m.TRANSITION_END, function () {
              t.setTransitioning(!1), p(t._element).removeClass(_t).addClass(gt).trigger(pt.HIDDEN)
            }).emulateTransitionEnd(a)
          }
        }
      }, t.setTransitioning = function (t) {
        this._isTransitioning = t
      }, t.dispose = function () {
        p.removeData(this._element, ct), this._config = null, this._parent = null, this._element = null, this._triggerArray = null, this._isTransitioning = null
      }, t._getConfig = function (t) {
        return (t = l({}, ft, t)).toggle = Boolean(t.toggle), m.typeCheckConfig(lt, t, dt), t
      }, t._getDimension = function () {
        return p(this._element).hasClass(yt) ? yt : Et
      }, t._getParent = function () {
        var t, n = this;
        m.isElement(this._config.parent) ? (t = this._config.parent, "undefined" != typeof this._config.parent.jquery && (t = this._config.parent[0])) : t = document.querySelector(this._config.parent);
        var e = '[data-toggle="collapse"][data-parent="' + this._config.parent + '"]',
          i = [].slice.call(t.querySelectorAll(e));
        return p(i).each(function (t, e) {
          n._addAriaAndCollapsedClass(a._getTargetFromElement(e), [e])
        }), t
      }, t._addAriaAndCollapsedClass = function (t, e) {
        var n = p(t).hasClass(mt);
        e.length && p(e).toggleClass(vt, !n).attr("aria-expanded", n)
      }, a._getTargetFromElement = function (t) {
        var e = m.getSelectorFromElement(t);
        return e ? document.querySelector(e) : null
      }, a._jQueryInterface = function (i) {
        return this.each(function () {
          var t = p(this),
            e = t.data(ct),
            n = l({}, ft, t.data(), "object" == typeof i && i ? i : {});
          if (!e && n.toggle && /show|hide/.test(i) && (n.toggle = !1), e || (e = new a(this, n), t.data(ct, e)), "string" == typeof i) {
            if ("undefined" == typeof e[i]) throw new TypeError('No method named "' + i + '"');
            e[i]()
          }
        })
      }, s(a, null, [{
        key: "VERSION",
        get: function () {
          return "4.2.1"
        }
      }, {
        key: "Default",
        get: function () {
          return ft
        }
      }]), a
    }();
  p(document).on(pt.CLICK_DATA_API, wt, function (t) {
    "A" === t.currentTarget.tagName && t.preventDefault();
    var n = p(this),
      e = m.getSelectorFromElement(this),
      i = [].slice.call(document.querySelectorAll(e));
    p(i).each(function () {
      var t = p(this),
        e = t.data(ct) ? "toggle" : n.data();
      Tt._jQueryInterface.call(t, e)
    })
  }), p.fn[lt] = Tt._jQueryInterface, p.fn[lt].Constructor = Tt, p.fn[lt].noConflict = function () {
    return p.fn[lt] = ut, Tt._jQueryInterface
  };
  for (var Ct = "undefined" != typeof window && "undefined" != typeof document, St = ["Edge", "Trident", "Firefox"], Dt = 0, It = 0; It < St.length; It += 1)
    if (Ct && 0 <= navigator.userAgent.indexOf(St[It])) {
      Dt = 1;
      break
    } var At = Ct && window.Promise ? function (t) {
    var e = !1;
    return function () {
      e || (e = !0, window.Promise.resolve().then(function () {
        e = !1, t()
      }))
    }
  } : function (t) {
    var e = !1;
    return function () {
      e || (e = !0, setTimeout(function () {
        e = !1, t()
      }, Dt))
    }
  };

  function Ot(t) {
    return t && "[object Function]" === {}.toString.call(t)
  }

  function Nt(t, e) {
    if (1 !== t.nodeType) return [];
    var n = t.ownerDocument.defaultView.getComputedStyle(t, null);
    return e ? n[e] : n
  }

  function kt(t) {
    return "HTML" === t.nodeName ? t : t.parentNode || t.host
  }

  function Lt(t) {
    if (!t) return document.body;
    switch (t.nodeName) {
      case "HTML":
      case "BODY":
        return t.ownerDocument.body;
      case "#document":
        return t.body
    }
    var e = Nt(t),
      n = e.overflow,
      i = e.overflowX,
      o = e.overflowY;
    return /(auto|scroll|overlay)/.test(n + o + i) ? t : Lt(kt(t))
  }
  var Pt = Ct && !(!window.MSInputMethodContext || !document.documentMode),
    xt = Ct && /MSIE 10/.test(navigator.userAgent);

  function Ht(t) {
    return 11 === t ? Pt : 10 === t ? xt : Pt || xt
  }

  function jt(t) {
    if (!t) return document.documentElement;
    for (var e = Ht(10) ? document.body : null, n = t.offsetParent || null; n === e && t.nextElementSibling;) n = (t = t.nextElementSibling).offsetParent;
    var i = n && n.nodeName;
    return i && "BODY" !== i && "HTML" !== i ? -1 !== ["TH", "TD", "TABLE"].indexOf(n.nodeName) && "static" === Nt(n, "position") ? jt(n) : n : t ? t.ownerDocument.documentElement : document.documentElement
  }

  function Rt(t) {
    return null !== t.parentNode ? Rt(t.parentNode) : t
  }

  function Ft(t, e) {
    if (!(t && t.nodeType && e && e.nodeType)) return document.documentElement;
    var n = t.compareDocumentPosition(e) & Node.DOCUMENT_POSITION_FOLLOWING,
      i = n ? t : e,
      o = n ? e : t,
      r = document.createRange();
    r.setStart(i, 0), r.setEnd(o, 0);
    var s, a, l = r.commonAncestorContainer;
    if (t !== l && e !== l || i.contains(o)) return "BODY" === (a = (s = l).nodeName) || "HTML" !== a && jt(s.firstElementChild) !== s ? jt(l) : l;
    var c = Rt(t);
    return c.host ? Ft(c.host, e) : Ft(t, Rt(e).host)
  }

  function Mt(t) {
    var e = "top" === (1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : "top") ? "scrollTop" : "scrollLeft",
      n = t.nodeName;
    if ("BODY" !== n && "HTML" !== n) return t[e];
    var i = t.ownerDocument.documentElement;
    return (t.ownerDocument.scrollingElement || i)[e]
  }

  function Wt(t, e) {
    var n = "x" === e ? "Left" : "Top",
      i = "Left" === n ? "Right" : "Bottom";
    return parseFloat(t["border" + n + "Width"], 10) + parseFloat(t["border" + i + "Width"], 10)
  }

  function Ut(t, e, n, i) {
    return Math.max(e["offset" + t], e["scroll" + t], n["client" + t], n["offset" + t], n["scroll" + t], Ht(10) ? parseInt(n["offset" + t]) + parseInt(i["margin" + ("Height" === t ? "Top" : "Left")]) + parseInt(i["margin" + ("Height" === t ? "Bottom" : "Right")]) : 0)
  }

  function Bt(t) {
    var e = t.body,
      n = t.documentElement,
      i = Ht(10) && getComputedStyle(n);
    return {
      height: Ut("Height", e, n, i),
      width: Ut("Width", e, n, i)
    }
  }
  var qt = function () {
      function i(t, e) {
        for (var n = 0; n < e.length; n++) {
          var i = e[n];
          i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
        }
      }
      return function (t, e, n) {
        return e && i(t.prototype, e), n && i(t, n), t
      }
    }(),
    Kt = function (t, e, n) {
      return e in t ? Object.defineProperty(t, e, {
        value: n,
        enumerable: !0,
        configurable: !0,
        writable: !0
      }) : t[e] = n, t
    },
    Qt = Object.assign || function (t) {
      for (var e = 1; e < arguments.length; e++) {
        var n = arguments[e];
        for (var i in n) Object.prototype.hasOwnProperty.call(n, i) && (t[i] = n[i])
      }
      return t
    };

  function Yt(t) {
    return Qt({}, t, {
      right: t.left + t.width,
      bottom: t.top + t.height
    })
  }

  function Vt(t) {
    var e = {};
    try {
      if (Ht(10)) {
        e = t.getBoundingClientRect();
        var n = Mt(t, "top"),
          i = Mt(t, "left");
        e.top += n, e.left += i, e.bottom += n, e.right += i
      } else e = t.getBoundingClientRect()
    } catch (t) {}
    var o = {
        left: e.left,
        top: e.top,
        width: e.right - e.left,
        height: e.bottom - e.top
      },
      r = "HTML" === t.nodeName ? Bt(t.ownerDocument) : {},
      s = r.width || t.clientWidth || o.right - o.left,
      a = r.height || t.clientHeight || o.bottom - o.top,
      l = t.offsetWidth - s,
      c = t.offsetHeight - a;
    if (l || c) {
      var h = Nt(t);
      l -= Wt(h, "x"), c -= Wt(h, "y"), o.width -= l, o.height -= c
    }
    return Yt(o)
  }

  function Xt(t, e) {
    var n = 2 < arguments.length && void 0 !== arguments[2] && arguments[2],
      i = Ht(10),
      o = "HTML" === e.nodeName,
      r = Vt(t),
      s = Vt(e),
      a = Lt(t),
      l = Nt(e),
      c = parseFloat(l.borderTopWidth, 10),
      h = parseFloat(l.borderLeftWidth, 10);
    n && o && (s.top = Math.max(s.top, 0), s.left = Math.max(s.left, 0));
    var u = Yt({
      top: r.top - s.top - c,
      left: r.left - s.left - h,
      width: r.width,
      height: r.height
    });
    if (u.marginTop = 0, u.marginLeft = 0, !i && o) {
      var f = parseFloat(l.marginTop, 10),
        d = parseFloat(l.marginLeft, 10);
      u.top -= c - f, u.bottom -= c - f, u.left -= h - d, u.right -= h - d, u.marginTop = f, u.marginLeft = d
    }
    return (i && !n ? e.contains(a) : e === a && "BODY" !== a.nodeName) && (u = function (t, e) {
      var n = 2 < arguments.length && void 0 !== arguments[2] && arguments[2],
        i = Mt(e, "top"),
        o = Mt(e, "left"),
        r = n ? -1 : 1;
      return t.top += i * r, t.bottom += i * r, t.left += o * r, t.right += o * r, t
    }(u, e)), u
  }

  function zt(t) {
    if (!t || !t.parentElement || Ht()) return document.documentElement;
    for (var e = t.parentElement; e && "none" === Nt(e, "transform");) e = e.parentElement;
    return e || document.documentElement
  }

  function Gt(t, e, n, i) {
    var o = 4 < arguments.length && void 0 !== arguments[4] && arguments[4],
      r = {
        top: 0,
        left: 0
      },
      s = o ? zt(t) : Ft(t, e);
    if ("viewport" === i) r = function (t) {
      var e = 1 < arguments.length && void 0 !== arguments[1] && arguments[1],
        n = t.ownerDocument.documentElement,
        i = Xt(t, n),
        o = Math.max(n.clientWidth, window.innerWidth || 0),
        r = Math.max(n.clientHeight, window.innerHeight || 0),
        s = e ? 0 : Mt(n),
        a = e ? 0 : Mt(n, "left");
      return Yt({
        top: s - i.top + i.marginTop,
        left: a - i.left + i.marginLeft,
        width: o,
        height: r
      })
    }(s, o);
    else {
      var a = void 0;
      "scrollParent" === i ? "BODY" === (a = Lt(kt(e))).nodeName && (a = t.ownerDocument.documentElement) : a = "window" === i ? t.ownerDocument.documentElement : i;
      var l = Xt(a, s, o);
      if ("HTML" !== a.nodeName || function t(e) {
          var n = e.nodeName;
          return "BODY" !== n && "HTML" !== n && ("fixed" === Nt(e, "position") || t(kt(e)))
        }(s)) r = l;
      else {
        var c = Bt(t.ownerDocument),
          h = c.height,
          u = c.width;
        r.top += l.top - l.marginTop, r.bottom = h + l.top, r.left += l.left - l.marginLeft, r.right = u + l.left
      }
    }
    var f = "number" == typeof (n = n || 0);
    return r.left += f ? n : n.left || 0, r.top += f ? n : n.top || 0, r.right -= f ? n : n.right || 0, r.bottom -= f ? n : n.bottom || 0, r
  }

  function Jt(t, e, i, n, o) {
    var r = 5 < arguments.length && void 0 !== arguments[5] ? arguments[5] : 0;
    if (-1 === t.indexOf("auto")) return t;
    var s = Gt(i, n, r, o),
      a = {
        top: {
          width: s.width,
          height: e.top - s.top
        },
        right: {
          width: s.right - e.right,
          height: s.height
        },
        bottom: {
          width: s.width,
          height: s.bottom - e.bottom
        },
        left: {
          width: e.left - s.left,
          height: s.height
        }
      },
      l = Object.keys(a).map(function (t) {
        return Qt({
          key: t
        }, a[t], {
          area: (e = a[t], e.width * e.height)
        });
        var e
      }).sort(function (t, e) {
        return e.area - t.area
      }),
      c = l.filter(function (t) {
        var e = t.width,
          n = t.height;
        return e >= i.clientWidth && n >= i.clientHeight
      }),
      h = 0 < c.length ? c[0].key : l[0].key,
      u = t.split("-")[1];
    return h + (u ? "-" + u : "")
  }

  function Zt(t, e, n) {
    var i = 3 < arguments.length && void 0 !== arguments[3] ? arguments[3] : null;
    return Xt(n, i ? zt(e) : Ft(e, n), i)
  }

  function $t(t) {
    var e = t.ownerDocument.defaultView.getComputedStyle(t),
      n = parseFloat(e.marginTop || 0) + parseFloat(e.marginBottom || 0),
      i = parseFloat(e.marginLeft || 0) + parseFloat(e.marginRight || 0);
    return {
      width: t.offsetWidth + i,
      height: t.offsetHeight + n
    }
  }

  function te(t) {
    var e = {
      left: "right",
      right: "left",
      bottom: "top",
      top: "bottom"
    };
    return t.replace(/left|right|bottom|top/g, function (t) {
      return e[t]
    })
  }

  function ee(t, e, n) {
    n = n.split("-")[0];
    var i = $t(t),
      o = {
        width: i.width,
        height: i.height
      },
      r = -1 !== ["right", "left"].indexOf(n),
      s = r ? "top" : "left",
      a = r ? "left" : "top",
      l = r ? "height" : "width",
      c = r ? "width" : "height";
    return o[s] = e[s] + e[l] / 2 - i[l] / 2, o[a] = n === a ? e[a] - i[c] : e[te(a)], o
  }

  function ne(t, e) {
    return Array.prototype.find ? t.find(e) : t.filter(e)[0]
  }

  function ie(t, n, e) {
    return (void 0 === e ? t : t.slice(0, function (t, e, n) {
      if (Array.prototype.findIndex) return t.findIndex(function (t) {
        return t[e] === n
      });
      var i = ne(t, function (t) {
        return t[e] === n
      });
      return t.indexOf(i)
    }(t, "name", e))).forEach(function (t) {
      t.function && console.warn("`modifier.function` is deprecated, use `modifier.fn`!");
      var e = t.function || t.fn;
      t.enabled && Ot(e) && (n.offsets.popper = Yt(n.offsets.popper), n.offsets.reference = Yt(n.offsets.reference), n = e(n, t))
    }), n
  }

  function oe(t, n) {
    return t.some(function (t) {
      var e = t.name;
      return t.enabled && e === n
    })
  }

  function re(t) {
    for (var e = [!1, "ms", "Webkit", "Moz", "O"], n = t.charAt(0).toUpperCase() + t.slice(1), i = 0; i < e.length; i++) {
      var o = e[i],
        r = o ? "" + o + n : t;
      if ("undefined" != typeof document.body.style[r]) return r
    }
    return null
  }

  function se(t) {
    var e = t.ownerDocument;
    return e ? e.defaultView : window
  }

  function ae(t, e, n, i) {
    n.updateBound = i, se(t).addEventListener("resize", n.updateBound, {
      passive: !0
    });
    var o = Lt(t);
    return function t(e, n, i, o) {
      var r = "BODY" === e.nodeName,
        s = r ? e.ownerDocument.defaultView : e;
      s.addEventListener(n, i, {
        passive: !0
      }), r || t(Lt(s.parentNode), n, i, o), o.push(s)
    }(o, "scroll", n.updateBound, n.scrollParents), n.scrollElement = o, n.eventsEnabled = !0, n
  }

  function le() {
    var t, e;
    this.state.eventsEnabled && (cancelAnimationFrame(this.scheduleUpdate), this.state = (t = this.reference, e = this.state, se(t).removeEventListener("resize", e.updateBound), e.scrollParents.forEach(function (t) {
      t.removeEventListener("scroll", e.updateBound)
    }), e.updateBound = null, e.scrollParents = [], e.scrollElement = null, e.eventsEnabled = !1, e))
  }

  function ce(t) {
    return "" !== t && !isNaN(parseFloat(t)) && isFinite(t)
  }

  function he(n, i) {
    Object.keys(i).forEach(function (t) {
      var e = ""; - 1 !== ["width", "height", "top", "right", "bottom", "left"].indexOf(t) && ce(i[t]) && (e = "px"), n.style[t] = i[t] + e
    })
  }
  var ue = Ct && /Firefox/i.test(navigator.userAgent);

  function fe(t, e, n) {
    var i = ne(t, function (t) {
        return t.name === e
      }),
      o = !!i && t.some(function (t) {
        return t.name === n && t.enabled && t.order < i.order
      });
    if (!o) {
      var r = "`" + e + "`",
        s = "`" + n + "`";
      console.warn(s + " modifier is required by " + r + " modifier in order to work, be sure to include it before " + r + "!")
    }
    return o
  }
  var de = ["auto-start", "auto", "auto-end", "top-start", "top", "top-end", "right-start", "right", "right-end", "bottom-end", "bottom", "bottom-start", "left-end", "left", "left-start"],
    pe = de.slice(3);

  function me(t) {
    var e = 1 < arguments.length && void 0 !== arguments[1] && arguments[1],
      n = pe.indexOf(t),
      i = pe.slice(n + 1).concat(pe.slice(0, n));
    return e ? i.reverse() : i
  }
  var ge = "flip",
    _e = "clockwise",
    ve = "counterclockwise";

  function ye(t, o, r, e) {
    var s = [0, 0],
      a = -1 !== ["right", "left"].indexOf(e),
      n = t.split(/(\+|\-)/).map(function (t) {
        return t.trim()
      }),
      i = n.indexOf(ne(n, function (t) {
        return -1 !== t.search(/,|\s/)
      }));
    n[i] && -1 === n[i].indexOf(",") && console.warn("Offsets separated by white space(s) are deprecated, use a comma (,) instead.");
    var l = /\s*,\s*|\s+/,
      c = -1 !== i ? [n.slice(0, i).concat([n[i].split(l)[0]]), [n[i].split(l)[1]].concat(n.slice(i + 1))] : [n];
    return (c = c.map(function (t, e) {
      var n = (1 === e ? !a : a) ? "height" : "width",
        i = !1;
      return t.reduce(function (t, e) {
        return "" === t[t.length - 1] && -1 !== ["+", "-"].indexOf(e) ? (t[t.length - 1] = e, i = !0, t) : i ? (t[t.length - 1] += e, i = !1, t) : t.concat(e)
      }, []).map(function (t) {
        return function (t, e, n, i) {
          var o = t.match(/((?:\-|\+)?\d*\.?\d*)(.*)/),
            r = +o[1],
            s = o[2];
          if (!r) return t;
          if (0 !== s.indexOf("%")) return "vh" !== s && "vw" !== s ? r : ("vh" === s ? Math.max(document.documentElement.clientHeight, window.innerHeight || 0) : Math.max(document.documentElement.clientWidth, window.innerWidth || 0)) / 100 * r;
          var a = void 0;
          switch (s) {
            case "%p":
              a = n;
              break;
            case "%":
            case "%r":
            default:
              a = i
          }
          return Yt(a)[e] / 100 * r
        }(t, n, o, r)
      })
    })).forEach(function (n, i) {
      n.forEach(function (t, e) {
        ce(t) && (s[i] += t * ("-" === n[e - 1] ? -1 : 1))
      })
    }), s
  }
  var Ee = {
      placement: "bottom",
      positionFixed: !1,
      eventsEnabled: !0,
      removeOnDestroy: !1,
      onCreate: function () {},
      onUpdate: function () {},
      modifiers: {
        shift: {
          order: 100,
          enabled: !0,
          fn: function (t) {
            var e = t.placement,
              n = e.split("-")[0],
              i = e.split("-")[1];
            if (i) {
              var o = t.offsets,
                r = o.reference,
                s = o.popper,
                a = -1 !== ["bottom", "top"].indexOf(n),
                l = a ? "left" : "top",
                c = a ? "width" : "height",
                h = {
                  start: Kt({}, l, r[l]),
                  end: Kt({}, l, r[l] + r[c] - s[c])
                };
              t.offsets.popper = Qt({}, s, h[i])
            }
            return t
          }
        },
        offset: {
          order: 200,
          enabled: !0,
          fn: function (t, e) {
            var n = e.offset,
              i = t.placement,
              o = t.offsets,
              r = o.popper,
              s = o.reference,
              a = i.split("-")[0],
              l = void 0;
            return l = ce(+n) ? [+n, 0] : ye(n, r, s, a), "left" === a ? (r.top += l[0], r.left -= l[1]) : "right" === a ? (r.top += l[0], r.left += l[1]) : "top" === a ? (r.left += l[0], r.top -= l[1]) : "bottom" === a && (r.left += l[0], r.top += l[1]), t.popper = r, t
          },
          offset: 0
        },
        preventOverflow: {
          order: 300,
          enabled: !0,
          fn: function (t, i) {
            var e = i.boundariesElement || jt(t.instance.popper);
            t.instance.reference === e && (e = jt(e));
            var n = re("transform"),
              o = t.instance.popper.style,
              r = o.top,
              s = o.left,
              a = o[n];
            o.top = "", o.left = "", o[n] = "";
            var l = Gt(t.instance.popper, t.instance.reference, i.padding, e, t.positionFixed);
            o.top = r, o.left = s, o[n] = a, i.boundaries = l;
            var c = i.priority,
              h = t.offsets.popper,
              u = {
                primary: function (t) {
                  var e = h[t];
                  return h[t] < l[t] && !i.escapeWithReference && (e = Math.max(h[t], l[t])), Kt({}, t, e)
                },
                secondary: function (t) {
                  var e = "right" === t ? "left" : "top",
                    n = h[e];
                  return h[t] > l[t] && !i.escapeWithReference && (n = Math.min(h[e], l[t] - ("right" === t ? h.width : h.height))), Kt({}, e, n)
                }
              };
            return c.forEach(function (t) {
              var e = -1 !== ["left", "top"].indexOf(t) ? "primary" : "secondary";
              h = Qt({}, h, u[e](t))
            }), t.offsets.popper = h, t
          },
          priority: ["left", "right", "top", "bottom"],
          padding: 5,
          boundariesElement: "scrollParent"
        },
        keepTogether: {
          order: 400,
          enabled: !0,
          fn: function (t) {
            var e = t.offsets,
              n = e.popper,
              i = e.reference,
              o = t.placement.split("-")[0],
              r = Math.floor,
              s = -1 !== ["top", "bottom"].indexOf(o),
              a = s ? "right" : "bottom",
              l = s ? "left" : "top",
              c = s ? "width" : "height";
            return n[a] < r(i[l]) && (t.offsets.popper[l] = r(i[l]) - n[c]), n[l] > r(i[a]) && (t.offsets.popper[l] = r(i[a])), t
          }
        },
        arrow: {
          order: 500,
          enabled: !0,
          fn: function (t, e) {
            var n;
            if (!fe(t.instance.modifiers, "arrow", "keepTogether")) return t;
            var i = e.element;
            if ("string" == typeof i) {
              if (!(i = t.instance.popper.querySelector(i))) return t
            } else if (!t.instance.popper.contains(i)) return console.warn("WARNING: `arrow.element` must be child of its popper element!"), t;
            var o = t.placement.split("-")[0],
              r = t.offsets,
              s = r.popper,
              a = r.reference,
              l = -1 !== ["left", "right"].indexOf(o),
              c = l ? "height" : "width",
              h = l ? "Top" : "Left",
              u = h.toLowerCase(),
              f = l ? "left" : "top",
              d = l ? "bottom" : "right",
              p = $t(i)[c];
            a[d] - p < s[u] && (t.offsets.popper[u] -= s[u] - (a[d] - p)), a[u] + p > s[d] && (t.offsets.popper[u] += a[u] + p - s[d]), t.offsets.popper = Yt(t.offsets.popper);
            var m = a[u] + a[c] / 2 - p / 2,
              g = Nt(t.instance.popper),
              _ = parseFloat(g["margin" + h], 10),
              v = parseFloat(g["border" + h + "Width"], 10),
              y = m - t.offsets.popper[u] - _ - v;
            return y = Math.max(Math.min(s[c] - p, y), 0), t.arrowElement = i, t.offsets.arrow = (Kt(n = {}, u, Math.round(y)), Kt(n, f, ""), n), t
          },
          element: "[x-arrow]"
        },
        flip: {
          order: 600,
          enabled: !0,
          fn: function (p, m) {
            if (oe(p.instance.modifiers, "inner")) return p;
            if (p.flipped && p.placement === p.originalPlacement) return p;
            var g = Gt(p.instance.popper, p.instance.reference, m.padding, m.boundariesElement, p.positionFixed),
              _ = p.placement.split("-")[0],
              v = te(_),
              y = p.placement.split("-")[1] || "",
              E = [];
            switch (m.behavior) {
              case ge:
                E = [_, v];
                break;
              case _e:
                E = me(_);
                break;
              case ve:
                E = me(_, !0);
                break;
              default:
                E = m.behavior
            }
            return E.forEach(function (t, e) {
              if (_ !== t || E.length === e + 1) return p;
              _ = p.placement.split("-")[0], v = te(_);
              var n, i = p.offsets.popper,
                o = p.offsets.reference,
                r = Math.floor,
                s = "left" === _ && r(i.right) > r(o.left) || "right" === _ && r(i.left) < r(o.right) || "top" === _ && r(i.bottom) > r(o.top) || "bottom" === _ && r(i.top) < r(o.bottom),
                a = r(i.left) < r(g.left),
                l = r(i.right) > r(g.right),
                c = r(i.top) < r(g.top),
                h = r(i.bottom) > r(g.bottom),
                u = "left" === _ && a || "right" === _ && l || "top" === _ && c || "bottom" === _ && h,
                f = -1 !== ["top", "bottom"].indexOf(_),
                d = !!m.flipVariations && (f && "start" === y && a || f && "end" === y && l || !f && "start" === y && c || !f && "end" === y && h);
              (s || u || d) && (p.flipped = !0, (s || u) && (_ = E[e + 1]), d && (y = "end" === (n = y) ? "start" : "start" === n ? "end" : n), p.placement = _ + (y ? "-" + y : ""), p.offsets.popper = Qt({}, p.offsets.popper, ee(p.instance.popper, p.offsets.reference, p.placement)), p = ie(p.instance.modifiers, p, "flip"))
            }), p
          },
          behavior: "flip",
          padding: 5,
          boundariesElement: "viewport"
        },
        inner: {
          order: 700,
          enabled: !1,
          fn: function (t) {
            var e = t.placement,
              n = e.split("-")[0],
              i = t.offsets,
              o = i.popper,
              r = i.reference,
              s = -1 !== ["left", "right"].indexOf(n),
              a = -1 === ["top", "left"].indexOf(n);
            return o[s ? "left" : "top"] = r[n] - (a ? o[s ? "width" : "height"] : 0), t.placement = te(e), t.offsets.popper = Yt(o), t
          }
        },
        hide: {
          order: 800,
          enabled: !0,
          fn: function (t) {
            if (!fe(t.instance.modifiers, "hide", "preventOverflow")) return t;
            var e = t.offsets.reference,
              n = ne(t.instance.modifiers, function (t) {
                return "preventOverflow" === t.name
              }).boundaries;
            if (e.bottom < n.top || e.left > n.right || e.top > n.bottom || e.right < n.left) {
              if (!0 === t.hide) return t;
              t.hide = !0, t.attributes["x-out-of-boundaries"] = ""
            } else {
              if (!1 === t.hide) return t;
              t.hide = !1, t.attributes["x-out-of-boundaries"] = !1
            }
            return t
          }
        },
        computeStyle: {
          order: 850,
          enabled: !0,
          fn: function (t, e) {
            var n = e.x,
              i = e.y,
              o = t.offsets.popper,
              r = ne(t.instance.modifiers, function (t) {
                return "applyStyle" === t.name
              }).gpuAcceleration;
            void 0 !== r && console.warn("WARNING: `gpuAcceleration` option moved to `computeStyle` modifier and will not be supported in future versions of Popper.js!");
            var s, a, l, c, h, u, f, d, p, m, g, _, v = void 0 !== r ? r : e.gpuAcceleration,
              y = jt(t.instance.popper),
              E = Vt(y),
              b = {
                position: o.position
              },
              w = (s = t, a = window.devicePixelRatio < 2 || !ue, l = s.offsets, c = l.popper, h = l.reference, u = -1 !== ["left", "right"].indexOf(s.placement), f = -1 !== s.placement.indexOf("-"), d = h.width % 2 == c.width % 2, p = h.width % 2 == 1 && c.width % 2 == 1, m = function (t) {
                return t
              }, g = a ? u || f || d ? Math.round : Math.floor : m, _ = a ? Math.round : m, {
                left: g(p && !f && a ? c.left - 1 : c.left),
                top: _(c.top),
                bottom: _(c.bottom),
                right: g(c.right)
              }),
              T = "bottom" === n ? "top" : "bottom",
              C = "right" === i ? "left" : "right",
              S = re("transform"),
              D = void 0,
              I = void 0;
            if (I = "bottom" === T ? "HTML" === y.nodeName ? -y.clientHeight + w.bottom : -E.height + w.bottom : w.top, D = "right" === C ? "HTML" === y.nodeName ? -y.clientWidth + w.right : -E.width + w.right : w.left, v && S) b[S] = "translate3d(" + D + "px, " + I + "px, 0)", b[T] = 0, b[C] = 0, b.willChange = "transform";
            else {
              var A = "bottom" === T ? -1 : 1,
                O = "right" === C ? -1 : 1;
              b[T] = I * A, b[C] = D * O, b.willChange = T + ", " + C
            }
            var N = {
              "x-placement": t.placement
            };
            return t.attributes = Qt({}, N, t.attributes), t.styles = Qt({}, b, t.styles), t.arrowStyles = Qt({}, t.offsets.arrow, t.arrowStyles), t
          },
          gpuAcceleration: !0,
          x: "bottom",
          y: "right"
        },
        applyStyle: {
          order: 900,
          enabled: !0,
          fn: function (t) {
            var e, n;
            return he(t.instance.popper, t.styles), e = t.instance.popper, n = t.attributes, Object.keys(n).forEach(function (t) {
              !1 !== n[t] ? e.setAttribute(t, n[t]) : e.removeAttribute(t)
            }), t.arrowElement && Object.keys(t.arrowStyles).length && he(t.arrowElement, t.arrowStyles), t
          },
          onLoad: function (t, e, n, i, o) {
            var r = Zt(o, e, t, n.positionFixed),
              s = Jt(n.placement, r, e, t, n.modifiers.flip.boundariesElement, n.modifiers.flip.padding);
            return e.setAttribute("x-placement", s), he(e, {
              position: n.positionFixed ? "fixed" : "absolute"
            }), n
          },
          gpuAcceleration: void 0
        }
      }
    },
    be = function () {
      function r(t, e) {
        var n = this,
          i = 2 < arguments.length && void 0 !== arguments[2] ? arguments[2] : {};
        ! function (t, e) {
          if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }(this, r), this.scheduleUpdate = function () {
          return requestAnimationFrame(n.update)
        }, this.update = At(this.update.bind(this)), this.options = Qt({}, r.Defaults, i), this.state = {
          isDestroyed: !1,
          isCreated: !1,
          scrollParents: []
        }, this.reference = t && t.jquery ? t[0] : t, this.popper = e && e.jquery ? e[0] : e, this.options.modifiers = {}, Object.keys(Qt({}, r.Defaults.modifiers, i.modifiers)).forEach(function (t) {
          n.options.modifiers[t] = Qt({}, r.Defaults.modifiers[t] || {}, i.modifiers ? i.modifiers[t] : {})
        }), this.modifiers = Object.keys(this.options.modifiers).map(function (t) {
          return Qt({
            name: t
          }, n.options.modifiers[t])
        }).sort(function (t, e) {
          return t.order - e.order
        }), this.modifiers.forEach(function (t) {
          t.enabled && Ot(t.onLoad) && t.onLoad(n.reference, n.popper, n.options, t, n.state)
        }), this.update();
        var o = this.options.eventsEnabled;
        o && this.enableEventListeners(), this.state.eventsEnabled = o
      }
      return qt(r, [{
        key: "update",
        value: function () {
          return function () {
            if (!this.state.isDestroyed) {
              var t = {
                instance: this,
                styles: {},
                arrowStyles: {},
                attributes: {},
                flipped: !1,
                offsets: {}
              };
              t.offsets.reference = Zt(this.state, this.popper, this.reference, this.options.positionFixed), t.placement = Jt(this.options.placement, t.offsets.reference, this.popper, this.reference, this.options.modifiers.flip.boundariesElement, this.options.modifiers.flip.padding), t.originalPlacement = t.placement, t.positionFixed = this.options.positionFixed, t.offsets.popper = ee(this.popper, t.offsets.reference, t.placement), t.offsets.popper.position = this.options.positionFixed ? "fixed" : "absolute", t = ie(this.modifiers, t), this.state.isCreated ? this.options.onUpdate(t) : (this.state.isCreated = !0, this.options.onCreate(t))
            }
          }.call(this)
        }
      }, {
        key: "destroy",
        value: function () {
          return function () {
            return this.state.isDestroyed = !0, oe(this.modifiers, "applyStyle") && (this.popper.removeAttribute("x-placement"), this.popper.style.position = "", this.popper.style.top = "", this.popper.style.left = "", this.popper.style.right = "", this.popper.style.bottom = "", this.popper.style.willChange = "", this.popper.style[re("transform")] = ""), this.disableEventListeners(), this.options.removeOnDestroy && this.popper.parentNode.removeChild(this.popper), this
          }.call(this)
        }
      }, {
        key: "enableEventListeners",
        value: function () {
          return function () {
            this.state.eventsEnabled || (this.state = ae(this.reference, this.options, this.state, this.scheduleUpdate))
          }.call(this)
        }
      }, {
        key: "disableEventListeners",
        value: function () {
          return le.call(this)
        }
      }]), r
    }();
  be.Utils = ("undefined" != typeof window ? window : global).PopperUtils, be.placements = de, be.Defaults = Ee;
  var we = "dropdown",
    Te = "bs.dropdown",
    Ce = "." + Te,
    Se = ".data-api",
    De = p.fn[we],
    Ie = new RegExp("38|40|27"),
    Ae = {
      HIDE: "hide" + Ce,
      HIDDEN: "hidden" + Ce,
      SHOW: "show" + Ce,
      SHOWN: "shown" + Ce,
      CLICK: "click" + Ce,
      CLICK_DATA_API: "click" + Ce + Se,
      KEYDOWN_DATA_API: "keydown" + Ce + Se,
      KEYUP_DATA_API: "keyup" + Ce + Se
    },
    Oe = "disabled",
    Ne = "show",
    ke = "dropup",
    Le = "dropright",
    Pe = "dropleft",
    xe = "dropdown-menu-right",
    He = "position-static",
    je = '[data-toggle="dropdown"]',
    Re = ".dropdown form",
    Fe = ".dropdown-menu",
    Me = ".navbar-nav",
    We = ".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)",
    Ue = "top-start",
    Be = "top-end",
    qe = "bottom-start",
    Ke = "bottom-end",
    Qe = "right-start",
    Ye = "left-start",
    Ve = {
      offset: 0,
      flip: !0,
      boundary: "scrollParent",
      reference: "toggle",
      display: "dynamic"
    },
    Xe = {
      offset: "(number|string|function)",
      flip: "boolean",
      boundary: "(string|element)",
      reference: "(string|element)",
      display: "string"
    },
    ze = function () {
      function c(t, e) {
        this._element = t, this._popper = null, this._config = this._getConfig(e), this._menu = this._getMenuElement(), this._inNavbar = this._detectNavbar(), this._addEventListeners()
      }
      var t = c.prototype;
      return t.toggle = function () {
        if (!this._element.disabled && !p(this._element).hasClass(Oe)) {
          var t = c._getParentFromElement(this._element),
            e = p(this._menu).hasClass(Ne);
          if (c._clearMenus(), !e) {
            var n = {
                relatedTarget: this._element
              },
              i = p.Event(Ae.SHOW, n);
            if (p(t).trigger(i), !i.isDefaultPrevented()) {
              if (!this._inNavbar) {
                if ("undefined" == typeof be) throw new TypeError("Bootstrap's dropdowns require Popper.js (https://popper.js.org/)");
                var o = this._element;
                "parent" === this._config.reference ? o = t : m.isElement(this._config.reference) && (o = this._config.reference, "undefined" != typeof this._config.reference.jquery && (o = this._config.reference[0])), "scrollParent" !== this._config.boundary && p(t).addClass(He), this._popper = new be(o, this._menu, this._getPopperConfig())
              }
              "ontouchstart" in document.documentElement && 0 === p(t).closest(Me).length && p(document.body).children().on("mouseover", null, p.noop), this._element.focus(), this._element.setAttribute("aria-expanded", !0), p(this._menu).toggleClass(Ne), p(t).toggleClass(Ne).trigger(p.Event(Ae.SHOWN, n))
            }
          }
        }
      }, t.show = function () {
        if (!(this._element.disabled || p(this._element).hasClass(Oe) || p(this._menu).hasClass(Ne))) {
          var t = {
              relatedTarget: this._element
            },
            e = p.Event(Ae.SHOW, t),
            n = c._getParentFromElement(this._element);
          p(n).trigger(e), e.isDefaultPrevented() || (p(this._menu).toggleClass(Ne), p(n).toggleClass(Ne).trigger(p.Event(Ae.SHOWN, t)))
        }
      }, t.hide = function () {
        if (!this._element.disabled && !p(this._element).hasClass(Oe) && p(this._menu).hasClass(Ne)) {
          var t = {
              relatedTarget: this._element
            },
            e = p.Event(Ae.HIDE, t),
            n = c._getParentFromElement(this._element);
          p(n).trigger(e), e.isDefaultPrevented() || (p(this._menu).toggleClass(Ne), p(n).toggleClass(Ne).trigger(p.Event(Ae.HIDDEN, t)))
        }
      }, t.dispose = function () {
        p.removeData(this._element, Te), p(this._element).off(Ce), this._element = null, (this._menu = null) !== this._popper && (this._popper.destroy(), this._popper = null)
      }, t.update = function () {
        this._inNavbar = this._detectNavbar(), null !== this._popper && this._popper.scheduleUpdate()
      }, t._addEventListeners = function () {
        var e = this;
        p(this._element).on(Ae.CLICK, function (t) {
          t.preventDefault(), t.stopPropagation(), e.toggle()
        })
      }, t._getConfig = function (t) {
        return t = l({}, this.constructor.Default, p(this._element).data(), t), m.typeCheckConfig(we, t, this.constructor.DefaultType), t
      }, t._getMenuElement = function () {
        if (!this._menu) {
          var t = c._getParentFromElement(this._element);
          t && (this._menu = t.querySelector(Fe))
        }
        return this._menu
      }, t._getPlacement = function () {
        var t = p(this._element.parentNode),
          e = qe;
        return t.hasClass(ke) ? (e = Ue, p(this._menu).hasClass(xe) && (e = Be)) : t.hasClass(Le) ? e = Qe : t.hasClass(Pe) ? e = Ye : p(this._menu).hasClass(xe) && (e = Ke), e
      }, t._detectNavbar = function () {
        return 0 < p(this._element).closest(".navbar").length
      }, t._getPopperConfig = function () {
        var e = this,
          t = {};
        "function" == typeof this._config.offset ? t.fn = function (t) {
          return t.offsets = l({}, t.offsets, e._config.offset(t.offsets) || {}), t
        } : t.offset = this._config.offset;
        var n = {
          placement: this._getPlacement(),
          modifiers: {
            offset: t,
            flip: {
              enabled: this._config.flip
            },
            preventOverflow: {
              boundariesElement: this._config.boundary
            }
          }
        };
        return "static" === this._config.display && (n.modifiers.applyStyle = {
          enabled: !1
        }), n
      }, c._jQueryInterface = function (e) {
        return this.each(function () {
          var t = p(this).data(Te);
          if (t || (t = new c(this, "object" == typeof e ? e : null), p(this).data(Te, t)), "string" == typeof e) {
            if ("undefined" == typeof t[e]) throw new TypeError('No method named "' + e + '"');
            t[e]()
          }
        })
      }, c._clearMenus = function (t) {
        if (!t || 3 !== t.which && ("keyup" !== t.type || 9 === t.which))
          for (var e = [].slice.call(document.querySelectorAll(je)), n = 0, i = e.length; n < i; n++) {
            var o = c._getParentFromElement(e[n]),
              r = p(e[n]).data(Te),
              s = {
                relatedTarget: e[n]
              };
            if (t && "click" === t.type && (s.clickEvent = t), r) {
              var a = r._menu;
              if (p(o).hasClass(Ne) && !(t && ("click" === t.type && /input|textarea/i.test(t.target.tagName) || "keyup" === t.type && 9 === t.which) && p.contains(o, t.target))) {
                var l = p.Event(Ae.HIDE, s);
                p(o).trigger(l), l.isDefaultPrevented() || ("ontouchstart" in document.documentElement && p(document.body).children().off("mouseover", null, p.noop), e[n].setAttribute("aria-expanded", "false"), p(a).removeClass(Ne), p(o).removeClass(Ne).trigger(p.Event(Ae.HIDDEN, s)))
              }
            }
          }
      }, c._getParentFromElement = function (t) {
        var e, n = m.getSelectorFromElement(t);
        return n && (e = document.querySelector(n)), e || t.parentNode
      }, c._dataApiKeydownHandler = function (t) {
        if ((/input|textarea/i.test(t.target.tagName) ? !(32 === t.which || 27 !== t.which && (40 !== t.which && 38 !== t.which || p(t.target).closest(Fe).length)) : Ie.test(t.which)) && (t.preventDefault(), t.stopPropagation(), !this.disabled && !p(this).hasClass(Oe))) {
          var e = c._getParentFromElement(this),
            n = p(e).hasClass(Ne);
          if (n && (!n || 27 !== t.which && 32 !== t.which)) {
            var i = [].slice.call(e.querySelectorAll(We));
            if (0 !== i.length) {
              var o = i.indexOf(t.target);
              38 === t.which && 0 < o && o--, 40 === t.which && o < i.length - 1 && o++, o < 0 && (o = 0), i[o].focus()
            }
          } else {
            if (27 === t.which) {
              var r = e.querySelector(je);
              p(r).trigger("focus")
            }
            p(this).trigger("click")
          }
        }
      }, s(c, null, [{
        key: "VERSION",
        get: function () {
          return "4.2.1"
        }
      }, {
        key: "Default",
        get: function () {
          return Ve
        }
      }, {
        key: "DefaultType",
        get: function () {
          return Xe
        }
      }]), c
    }();
  p(document).on(Ae.KEYDOWN_DATA_API, je, ze._dataApiKeydownHandler).on(Ae.KEYDOWN_DATA_API, Fe, ze._dataApiKeydownHandler).on(Ae.CLICK_DATA_API + " " + Ae.KEYUP_DATA_API, ze._clearMenus).on(Ae.CLICK_DATA_API, je, function (t) {
    t.preventDefault(), t.stopPropagation(), ze._jQueryInterface.call(p(this), "toggle")
  }).on(Ae.CLICK_DATA_API, Re, function (t) {
    t.stopPropagation()
  }), p.fn[we] = ze._jQueryInterface, p.fn[we].Constructor = ze, p.fn[we].noConflict = function () {
    return p.fn[we] = De, ze._jQueryInterface
  };
  var Ge = "modal",
    Je = "bs.modal",
    Ze = "." + Je,
    $e = p.fn[Ge],
    tn = {
      backdrop: !0,
      keyboard: !0,
      focus: !0,
      show: !0
    },
    en = {
      backdrop: "(boolean|string)",
      keyboard: "boolean",
      focus: "boolean",
      show: "boolean"
    },
    nn = {
      HIDE: "hide" + Ze,
      HIDDEN: "hidden" + Ze,
      SHOW: "show" + Ze,
      SHOWN: "shown" + Ze,
      FOCUSIN: "focusin" + Ze,
      RESIZE: "resize" + Ze,
      CLICK_DISMISS: "click.dismiss" + Ze,
      KEYDOWN_DISMISS: "keydown.dismiss" + Ze,
      MOUSEUP_DISMISS: "mouseup.dismiss" + Ze,
      MOUSEDOWN_DISMISS: "mousedown.dismiss" + Ze,
      CLICK_DATA_API: "click" + Ze + ".data-api"
    },
    on = "modal-scrollbar-measure",
    rn = "modal-backdrop",
    sn = "modal-open",
    an = "fade",
    ln = "show",
    cn = ".modal-dialog",
    hn = '[data-toggle="modal"]',
    un = '[data-dismiss="modal"]',
    fn = ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",
    dn = ".sticky-top",
    pn = function () {
      function o(t, e) {
        this._config = this._getConfig(e), this._element = t, this._dialog = t.querySelector(cn), this._backdrop = null, this._isShown = !1, this._isBodyOverflowing = !1, this._ignoreBackdropClick = !1, this._isTransitioning = !1, this._scrollbarWidth = 0
      }
      var t = o.prototype;
      return t.toggle = function (t) {
        return this._isShown ? this.hide() : this.show(t)
      }, t.show = function (t) {
        var e = this;
        if (!this._isShown && !this._isTransitioning) {
          p(this._element).hasClass(an) && (this._isTransitioning = !0);
          var n = p.Event(nn.SHOW, {
            relatedTarget: t
          });
          p(this._element).trigger(n), this._isShown || n.isDefaultPrevented() || (this._isShown = !0, this._checkScrollbar(), this._setScrollbar(), this._adjustDialog(), this._setEscapeEvent(), this._setResizeEvent(), p(this._element).on(nn.CLICK_DISMISS, un, function (t) {
            return e.hide(t)
          }), p(this._dialog).on(nn.MOUSEDOWN_DISMISS, function () {
            p(e._element).one(nn.MOUSEUP_DISMISS, function (t) {
              p(t.target).is(e._element) && (e._ignoreBackdropClick = !0)
            })
          }), this._showBackdrop(function () {
            return e._showElement(t)
          }))
        }
      }, t.hide = function (t) {
        var e = this;
        if (t && t.preventDefault(), this._isShown && !this._isTransitioning) {
          var n = p.Event(nn.HIDE);
          if (p(this._element).trigger(n), this._isShown && !n.isDefaultPrevented()) {
            this._isShown = !1;
            var i = p(this._element).hasClass(an);
            if (i && (this._isTransitioning = !0), this._setEscapeEvent(), this._setResizeEvent(), p(document).off(nn.FOCUSIN), p(this._element).removeClass(ln), p(this._element).off(nn.CLICK_DISMISS), p(this._dialog).off(nn.MOUSEDOWN_DISMISS), i) {
              var o = m.getTransitionDurationFromElement(this._element);
              p(this._element).one(m.TRANSITION_END, function (t) {
                return e._hideModal(t)
              }).emulateTransitionEnd(o)
            } else this._hideModal()
          }
        }
      }, t.dispose = function () {
        [window, this._element, this._dialog].forEach(function (t) {
          return p(t).off(Ze)
        }), p(document).off(nn.FOCUSIN), p.removeData(this._element, Je), this._config = null, this._element = null, this._dialog = null, this._backdrop = null, this._isShown = null, this._isBodyOverflowing = null, this._ignoreBackdropClick = null, this._isTransitioning = null, this._scrollbarWidth = null
      }, t.handleUpdate = function () {
        this._adjustDialog()
      }, t._getConfig = function (t) {
        return t = l({}, tn, t), m.typeCheckConfig(Ge, t, en), t
      }, t._showElement = function (t) {
        var e = this,
          n = p(this._element).hasClass(an);
        this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE || document.body.appendChild(this._element), this._element.style.display = "block", this._element.removeAttribute("aria-hidden"), this._element.setAttribute("aria-modal", !0), this._element.scrollTop = 0, n && m.reflow(this._element), p(this._element).addClass(ln), this._config.focus && this._enforceFocus();
        var i = p.Event(nn.SHOWN, {
            relatedTarget: t
          }),
          o = function () {
            e._config.focus && e._element.focus(), e._isTransitioning = !1, p(e._element).trigger(i)
          };
        if (n) {
          var r = m.getTransitionDurationFromElement(this._dialog);
          p(this._dialog).one(m.TRANSITION_END, o).emulateTransitionEnd(r)
        } else o()
      }, t._enforceFocus = function () {
        var e = this;
        p(document).off(nn.FOCUSIN).on(nn.FOCUSIN, function (t) {
          document !== t.target && e._element !== t.target && 0 === p(e._element).has(t.target).length && e._element.focus()
        })
      }, t._setEscapeEvent = function () {
        var e = this;
        this._isShown && this._config.keyboard ? p(this._element).on(nn.KEYDOWN_DISMISS, function (t) {
          27 === t.which && (t.preventDefault(), e.hide())
        }) : this._isShown || p(this._element).off(nn.KEYDOWN_DISMISS)
      }, t._setResizeEvent = function () {
        var e = this;
        this._isShown ? p(window).on(nn.RESIZE, function (t) {
          return e.handleUpdate(t)
        }) : p(window).off(nn.RESIZE)
      }, t._hideModal = function () {
        var t = this;
        this._element.style.display = "none", this._element.setAttribute("aria-hidden", !0), this._element.removeAttribute("aria-modal"), this._isTransitioning = !1, this._showBackdrop(function () {
          p(document.body).removeClass(sn), t._resetAdjustments(), t._resetScrollbar(), p(t._element).trigger(nn.HIDDEN)
        })
      }, t._removeBackdrop = function () {
        this._backdrop && (p(this._backdrop).remove(), this._backdrop = null)
      }, t._showBackdrop = function (t) {
        var e = this,
          n = p(this._element).hasClass(an) ? an : "";
        if (this._isShown && this._config.backdrop) {
          if (this._backdrop = document.createElement("div"), this._backdrop.className = rn, n && this._backdrop.classList.add(n), p(this._backdrop).appendTo(document.body), p(this._element).on(nn.CLICK_DISMISS, function (t) {
              e._ignoreBackdropClick ? e._ignoreBackdropClick = !1 : t.target === t.currentTarget && ("static" === e._config.backdrop ? e._element.focus() : e.hide())
            }), n && m.reflow(this._backdrop), p(this._backdrop).addClass(ln), !t) return;
          if (!n) return void t();
          var i = m.getTransitionDurationFromElement(this._backdrop);
          p(this._backdrop).one(m.TRANSITION_END, t).emulateTransitionEnd(i)
        } else if (!this._isShown && this._backdrop) {
          p(this._backdrop).removeClass(ln);
          var o = function () {
            e._removeBackdrop(), t && t()
          };
          if (p(this._element).hasClass(an)) {
            var r = m.getTransitionDurationFromElement(this._backdrop);
            p(this._backdrop).one(m.TRANSITION_END, o).emulateTransitionEnd(r)
          } else o()
        } else t && t()
      }, t._adjustDialog = function () {
        var t = this._element.scrollHeight > document.documentElement.clientHeight;
        !this._isBodyOverflowing && t && (this._element.style.paddingLeft = this._scrollbarWidth + "px"), this._isBodyOverflowing && !t && (this._element.style.paddingRight = this._scrollbarWidth + "px")
      }, t._resetAdjustments = function () {
        this._element.style.paddingLeft = "", this._element.style.paddingRight = ""
      }, t._checkScrollbar = function () {
        var t = document.body.getBoundingClientRect();
        this._isBodyOverflowing = t.left + t.right < window.innerWidth, this._scrollbarWidth = this._getScrollbarWidth()
      }, t._setScrollbar = function () {
        var o = this;
        if (this._isBodyOverflowing) {
          var t = [].slice.call(document.querySelectorAll(fn)),
            e = [].slice.call(document.querySelectorAll(dn));
          p(t).each(function (t, e) {
            var n = e.style.paddingRight,
              i = p(e).css("padding-right");
            p(e).data("padding-right", n).css("padding-right", parseFloat(i) + o._scrollbarWidth + "px")
          }), p(e).each(function (t, e) {
            var n = e.style.marginRight,
              i = p(e).css("margin-right");
            p(e).data("margin-right", n).css("margin-right", parseFloat(i) - o._scrollbarWidth + "px")
          });
          var n = document.body.style.paddingRight,
            i = p(document.body).css("padding-right");
          p(document.body).data("padding-right", n).css("padding-right", parseFloat(i) + this._scrollbarWidth + "px")
        }
        p(document.body).addClass(sn)
      }, t._resetScrollbar = function () {
        var t = [].slice.call(document.querySelectorAll(fn));
        p(t).each(function (t, e) {
          var n = p(e).data("padding-right");
          p(e).removeData("padding-right"), e.style.paddingRight = n || ""
        });
        var e = [].slice.call(document.querySelectorAll("" + dn));
        p(e).each(function (t, e) {
          var n = p(e).data("margin-right");
          "undefined" != typeof n && p(e).css("margin-right", n).removeData("margin-right")
        });
        var n = p(document.body).data("padding-right");
        p(document.body).removeData("padding-right"), document.body.style.paddingRight = n || ""
      }, t._getScrollbarWidth = function () {
        var t = document.createElement("div");
        t.className = on, document.body.appendChild(t);
        var e = t.getBoundingClientRect().width - t.clientWidth;
        return document.body.removeChild(t), e
      }, o._jQueryInterface = function (n, i) {
        return this.each(function () {
          var t = p(this).data(Je),
            e = l({}, tn, p(this).data(), "object" == typeof n && n ? n : {});
          if (t || (t = new o(this, e), p(this).data(Je, t)), "string" == typeof n) {
            if ("undefined" == typeof t[n]) throw new TypeError('No method named "' + n + '"');
            t[n](i)
          } else e.show && t.show(i)
        })
      }, s(o, null, [{
        key: "VERSION",
        get: function () {
          return "4.2.1"
        }
      }, {
        key: "Default",
        get: function () {
          return tn
        }
      }]), o
    }();
  p(document).on(nn.CLICK_DATA_API, hn, function (t) {
    var e, n = this,
      i = m.getSelectorFromElement(this);
    i && (e = document.querySelector(i));
    var o = p(e).data(Je) ? "toggle" : l({}, p(e).data(), p(this).data());
    "A" !== this.tagName && "AREA" !== this.tagName || t.preventDefault();
    var r = p(e).one(nn.SHOW, function (t) {
      t.isDefaultPrevented() || r.one(nn.HIDDEN, function () {
        p(n).is(":visible") && n.focus()
      })
    });
    pn._jQueryInterface.call(p(e), o, this)
  }), p.fn[Ge] = pn._jQueryInterface, p.fn[Ge].Constructor = pn, p.fn[Ge].noConflict = function () {
    return p.fn[Ge] = $e, pn._jQueryInterface
  };
  var mn = "tooltip",
    gn = "bs.tooltip",
    _n = "." + gn,
    vn = p.fn[mn],
    yn = "bs-tooltip",
    En = new RegExp("(^|\\s)" + yn + "\\S+", "g"),
    bn = {
      animation: "boolean",
      template: "string",
      title: "(string|element|function)",
      trigger: "string",
      delay: "(number|object)",
      html: "boolean",
      selector: "(string|boolean)",
      placement: "(string|function)",
      offset: "(number|string)",
      container: "(string|element|boolean)",
      fallbackPlacement: "(string|array)",
      boundary: "(string|element)"
    },
    wn = {
      AUTO: "auto",
      TOP: "top",
      RIGHT: "right",
      BOTTOM: "bottom",
      LEFT: "left"
    },
    Tn = {
      animation: !0,
      template: '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
      trigger: "hover focus",
      title: "",
      delay: 0,
      html: !1,
      selector: !1,
      placement: "top",
      offset: 0,
      container: !1,
      fallbackPlacement: "flip",
      boundary: "scrollParent"
    },
    Cn = "show",
    Sn = "out",
    Dn = {
      HIDE: "hide" + _n,
      HIDDEN: "hidden" + _n,
      SHOW: "show" + _n,
      SHOWN: "shown" + _n,
      INSERTED: "inserted" + _n,
      CLICK: "click" + _n,
      FOCUSIN: "focusin" + _n,
      FOCUSOUT: "focusout" + _n,
      MOUSEENTER: "mouseenter" + _n,
      MOUSELEAVE: "mouseleave" + _n
    },
    In = "fade",
    An = "show",
    On = ".tooltip-inner",
    Nn = ".arrow",
    kn = "hover",
    Ln = "focus",
    Pn = "click",
    xn = "manual",
    Hn = function () {
      function i(t, e) {
        if ("undefined" == typeof be) throw new TypeError("Bootstrap's tooltips require Popper.js (https://popper.js.org/)");
        this._isEnabled = !0, this._timeout = 0, this._hoverState = "", this._activeTrigger = {}, this._popper = null, this.element = t, this.config = this._getConfig(e), this.tip = null, this._setListeners()
      }
      var t = i.prototype;
      return t.enable = function () {
        this._isEnabled = !0
      }, t.disable = function () {
        this._isEnabled = !1
      }, t.toggleEnabled = function () {
        this._isEnabled = !this._isEnabled
      }, t.toggle = function (t) {
        if (this._isEnabled)
          if (t) {
            var e = this.constructor.DATA_KEY,
              n = p(t.currentTarget).data(e);
            n || (n = new this.constructor(t.currentTarget, this._getDelegateConfig()), p(t.currentTarget).data(e, n)), n._activeTrigger.click = !n._activeTrigger.click, n._isWithActiveTrigger() ? n._enter(null, n) : n._leave(null, n)
          } else {
            if (p(this.getTipElement()).hasClass(An)) return void this._leave(null, this);
            this._enter(null, this)
          }
      }, t.dispose = function () {
        clearTimeout(this._timeout), p.removeData(this.element, this.constructor.DATA_KEY), p(this.element).off(this.constructor.EVENT_KEY), p(this.element).closest(".modal").off("hide.bs.modal"), this.tip && p(this.tip).remove(), this._isEnabled = null, this._timeout = null, this._hoverState = null, (this._activeTrigger = null) !== this._popper && this._popper.destroy(), this._popper = null, this.element = null, this.config = null, this.tip = null
      }, t.show = function () {
        var e = this;
        if ("none" === p(this.element).css("display")) throw new Error("Please use show on visible elements");
        var t = p.Event(this.constructor.Event.SHOW);
        if (this.isWithContent() && this._isEnabled) {
          p(this.element).trigger(t);
          var n = m.findShadowRoot(this.element),
            i = p.contains(null !== n ? n : this.element.ownerDocument.documentElement, this.element);
          if (t.isDefaultPrevented() || !i) return;
          var o = this.getTipElement(),
            r = m.getUID(this.constructor.NAME);
          o.setAttribute("id", r), this.element.setAttribute("aria-describedby", r), this.setContent(), this.config.animation && p(o).addClass(In);
          var s = "function" == typeof this.config.placement ? this.config.placement.call(this, o, this.element) : this.config.placement,
            a = this._getAttachment(s);
          this.addAttachmentClass(a);
          var l = this._getContainer();
          p(o).data(this.constructor.DATA_KEY, this), p.contains(this.element.ownerDocument.documentElement, this.tip) || p(o).appendTo(l), p(this.element).trigger(this.constructor.Event.INSERTED), this._popper = new be(this.element, o, {
            placement: a,
            modifiers: {
              offset: {
                offset: this.config.offset
              },
              flip: {
                behavior: this.config.fallbackPlacement
              },
              arrow: {
                element: Nn
              },
              preventOverflow: {
                boundariesElement: this.config.boundary
              }
            },
            onCreate: function (t) {
              t.originalPlacement !== t.placement && e._handlePopperPlacementChange(t)
            },
            onUpdate: function (t) {
              return e._handlePopperPlacementChange(t)
            }
          }), p(o).addClass(An), "ontouchstart" in document.documentElement && p(document.body).children().on("mouseover", null, p.noop);
          var c = function () {
            e.config.animation && e._fixTransition();
            var t = e._hoverState;
            e._hoverState = null, p(e.element).trigger(e.constructor.Event.SHOWN), t === Sn && e._leave(null, e)
          };
          if (p(this.tip).hasClass(In)) {
            var h = m.getTransitionDurationFromElement(this.tip);
            p(this.tip).one(m.TRANSITION_END, c).emulateTransitionEnd(h)
          } else c()
        }
      }, t.hide = function (t) {
        var e = this,
          n = this.getTipElement(),
          i = p.Event(this.constructor.Event.HIDE),
          o = function () {
            e._hoverState !== Cn && n.parentNode && n.parentNode.removeChild(n), e._cleanTipClass(), e.element.removeAttribute("aria-describedby"), p(e.element).trigger(e.constructor.Event.HIDDEN), null !== e._popper && e._popper.destroy(), t && t()
          };
        if (p(this.element).trigger(i), !i.isDefaultPrevented()) {
          if (p(n).removeClass(An), "ontouchstart" in document.documentElement && p(document.body).children().off("mouseover", null, p.noop), this._activeTrigger[Pn] = !1, this._activeTrigger[Ln] = !1, this._activeTrigger[kn] = !1, p(this.tip).hasClass(In)) {
            var r = m.getTransitionDurationFromElement(n);
            p(n).one(m.TRANSITION_END, o).emulateTransitionEnd(r)
          } else o();
          this._hoverState = ""
        }
      }, t.update = function () {
        null !== this._popper && this._popper.scheduleUpdate()
      }, t.isWithContent = function () {
        return Boolean(this.getTitle())
      }, t.addAttachmentClass = function (t) {
        p(this.getTipElement()).addClass(yn + "-" + t)
      }, t.getTipElement = function () {
        return this.tip = this.tip || p(this.config.template)[0], this.tip
      }, t.setContent = function () {
        var t = this.getTipElement();
        this.setElementContent(p(t.querySelectorAll(On)), this.getTitle()), p(t).removeClass(In + " " + An)
      }, t.setElementContent = function (t, e) {
        var n = this.config.html;
        "object" == typeof e && (e.nodeType || e.jquery) ? n ? p(e).parent().is(t) || t.empty().append(e) : t.text(p(e).text()) : t[n ? "html" : "text"](e)
      }, t.getTitle = function () {
        var t = this.element.getAttribute("data-original-title");
        return t || (t = "function" == typeof this.config.title ? this.config.title.call(this.element) : this.config.title), t
      }, t._getContainer = function () {
        return !1 === this.config.container ? document.body : m.isElement(this.config.container) ? p(this.config.container) : p(document).find(this.config.container)
      }, t._getAttachment = function (t) {
        return wn[t.toUpperCase()]
      }, t._setListeners = function () {
        var i = this;
        this.config.trigger.split(" ").forEach(function (t) {
          if ("click" === t) p(i.element).on(i.constructor.Event.CLICK, i.config.selector, function (t) {
            return i.toggle(t)
          });
          else if (t !== xn) {
            var e = t === kn ? i.constructor.Event.MOUSEENTER : i.constructor.Event.FOCUSIN,
              n = t === kn ? i.constructor.Event.MOUSELEAVE : i.constructor.Event.FOCUSOUT;
            p(i.element).on(e, i.config.selector, function (t) {
              return i._enter(t)
            }).on(n, i.config.selector, function (t) {
              return i._leave(t)
            })
          }
        }), p(this.element).closest(".modal").on("hide.bs.modal", function () {
          i.element && i.hide()
        }), this.config.selector ? this.config = l({}, this.config, {
          trigger: "manual",
          selector: ""
        }) : this._fixTitle()
      }, t._fixTitle = function () {
        var t = typeof this.element.getAttribute("data-original-title");
        (this.element.getAttribute("title") || "string" !== t) && (this.element.setAttribute("data-original-title", this.element.getAttribute("title") || ""), this.element.setAttribute("title", ""))
      }, t._enter = function (t, e) {
        var n = this.constructor.DATA_KEY;
        (e = e || p(t.currentTarget).data(n)) || (e = new this.constructor(t.currentTarget, this._getDelegateConfig()), p(t.currentTarget).data(n, e)), t && (e._activeTrigger["focusin" === t.type ? Ln : kn] = !0), p(e.getTipElement()).hasClass(An) || e._hoverState === Cn ? e._hoverState = Cn : (clearTimeout(e._timeout), e._hoverState = Cn, e.config.delay && e.config.delay.show ? e._timeout = setTimeout(function () {
          e._hoverState === Cn && e.show()
        }, e.config.delay.show) : e.show())
      }, t._leave = function (t, e) {
        var n = this.constructor.DATA_KEY;
        (e = e || p(t.currentTarget).data(n)) || (e = new this.constructor(t.currentTarget, this._getDelegateConfig()), p(t.currentTarget).data(n, e)), t && (e._activeTrigger["focusout" === t.type ? Ln : kn] = !1), e._isWithActiveTrigger() || (clearTimeout(e._timeout), e._hoverState = Sn, e.config.delay && e.config.delay.hide ? e._timeout = setTimeout(function () {
          e._hoverState === Sn && e.hide()
        }, e.config.delay.hide) : e.hide())
      }, t._isWithActiveTrigger = function () {
        for (var t in this._activeTrigger)
          if (this._activeTrigger[t]) return !0;
        return !1
      }, t._getConfig = function (t) {
        return "number" == typeof (t = l({}, this.constructor.Default, p(this.element).data(), "object" == typeof t && t ? t : {})).delay && (t.delay = {
          show: t.delay,
          hide: t.delay
        }), "number" == typeof t.title && (t.title = t.title.toString()), "number" == typeof t.content && (t.content = t.content.toString()), m.typeCheckConfig(mn, t, this.constructor.DefaultType), t
      }, t._getDelegateConfig = function () {
        var t = {};
        if (this.config)
          for (var e in this.config) this.constructor.Default[e] !== this.config[e] && (t[e] = this.config[e]);
        return t
      }, t._cleanTipClass = function () {
        var t = p(this.getTipElement()),
          e = t.attr("class").match(En);
        null !== e && e.length && t.removeClass(e.join(""))
      }, t._handlePopperPlacementChange = function (t) {
        var e = t.instance;
        this.tip = e.popper, this._cleanTipClass(), this.addAttachmentClass(this._getAttachment(t.placement))
      }, t._fixTransition = function () {
        var t = this.getTipElement(),
          e = this.config.animation;
        null === t.getAttribute("x-placement") && (p(t).removeClass(In), this.config.animation = !1, this.hide(), this.show(), this.config.animation = e)
      }, i._jQueryInterface = function (n) {
        return this.each(function () {
          var t = p(this).data(gn),
            e = "object" == typeof n && n;
          if ((t || !/dispose|hide/.test(n)) && (t || (t = new i(this, e), p(this).data(gn, t)), "string" == typeof n)) {
            if ("undefined" == typeof t[n]) throw new TypeError('No method named "' + n + '"');
            t[n]()
          }
        })
      }, s(i, null, [{
        key: "VERSION",
        get: function () {
          return "4.2.1"
        }
      }, {
        key: "Default",
        get: function () {
          return Tn
        }
      }, {
        key: "NAME",
        get: function () {
          return mn
        }
      }, {
        key: "DATA_KEY",
        get: function () {
          return gn
        }
      }, {
        key: "Event",
        get: function () {
          return Dn
        }
      }, {
        key: "EVENT_KEY",
        get: function () {
          return _n
        }
      }, {
        key: "DefaultType",
        get: function () {
          return bn
        }
      }]), i
    }();
  p.fn[mn] = Hn._jQueryInterface, p.fn[mn].Constructor = Hn, p.fn[mn].noConflict = function () {
    return p.fn[mn] = vn, Hn._jQueryInterface
  };
  var jn = "popover",
    Rn = "bs.popover",
    Fn = "." + Rn,
    Mn = p.fn[jn],
    Wn = "bs-popover",
    Un = new RegExp("(^|\\s)" + Wn + "\\S+", "g"),
    Bn = l({}, Hn.Default, {
      placement: "right",
      trigger: "click",
      content: "",
      template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
    }),
    qn = l({}, Hn.DefaultType, {
      content: "(string|element|function)"
    }),
    Kn = "fade",
    Qn = "show",
    Yn = ".popover-header",
    Vn = ".popover-body",
    Xn = {
      HIDE: "hide" + Fn,
      HIDDEN: "hidden" + Fn,
      SHOW: "show" + Fn,
      SHOWN: "shown" + Fn,
      INSERTED: "inserted" + Fn,
      CLICK: "click" + Fn,
      FOCUSIN: "focusin" + Fn,
      FOCUSOUT: "focusout" + Fn,
      MOUSEENTER: "mouseenter" + Fn,
      MOUSELEAVE: "mouseleave" + Fn
    },
    zn = function (t) {
      var e, n;

      function i() {
        return t.apply(this, arguments) || this
      }
      n = t, (e = i).prototype = Object.create(n.prototype), (e.prototype.constructor = e).__proto__ = n;
      var o = i.prototype;
      return o.isWithContent = function () {
        return this.getTitle() || this._getContent()
      }, o.addAttachmentClass = function (t) {
        p(this.getTipElement()).addClass(Wn + "-" + t)
      }, o.getTipElement = function () {
        return this.tip = this.tip || p(this.config.template)[0], this.tip
      }, o.setContent = function () {
        var t = p(this.getTipElement());
        this.setElementContent(t.find(Yn), this.getTitle());
        var e = this._getContent();
        "function" == typeof e && (e = e.call(this.element)), this.setElementContent(t.find(Vn), e), t.removeClass(Kn + " " + Qn)
      }, o._getContent = function () {
        return this.element.getAttribute("data-content") || this.config.content
      }, o._cleanTipClass = function () {
        var t = p(this.getTipElement()),
          e = t.attr("class").match(Un);
        null !== e && 0 < e.length && t.removeClass(e.join(""))
      }, i._jQueryInterface = function (n) {
        return this.each(function () {
          var t = p(this).data(Rn),
            e = "object" == typeof n ? n : null;
          if ((t || !/dispose|hide/.test(n)) && (t || (t = new i(this, e), p(this).data(Rn, t)), "string" == typeof n)) {
            if ("undefined" == typeof t[n]) throw new TypeError('No method named "' + n + '"');
            t[n]()
          }
        })
      }, s(i, null, [{
        key: "VERSION",
        get: function () {
          return "4.2.1"
        }
      }, {
        key: "Default",
        get: function () {
          return Bn
        }
      }, {
        key: "NAME",
        get: function () {
          return jn
        }
      }, {
        key: "DATA_KEY",
        get: function () {
          return Rn
        }
      }, {
        key: "Event",
        get: function () {
          return Xn
        }
      }, {
        key: "EVENT_KEY",
        get: function () {
          return Fn
        }
      }, {
        key: "DefaultType",
        get: function () {
          return qn
        }
      }]), i
    }(Hn);
  p.fn[jn] = zn._jQueryInterface, p.fn[jn].Constructor = zn, p.fn[jn].noConflict = function () {
    return p.fn[jn] = Mn, zn._jQueryInterface
  };
  var Gn = "scrollspy",
    Jn = "bs.scrollspy",
    Zn = "." + Jn,
    $n = p.fn[Gn],
    ti = {
      offset: 10,
      method: "auto",
      target: ""
    },
    ei = {
      offset: "number",
      method: "string",
      target: "(string|element)"
    },
    ni = {
      ACTIVATE: "activate" + Zn,
      SCROLL: "scroll" + Zn,
      LOAD_DATA_API: "load" + Zn + ".data-api"
    },
    ii = "dropdown-item",
    oi = "active",
    ri = '[data-spy="scroll"]',
    si = ".nav, .list-group",
    ai = ".nav-link",
    li = ".nav-item",
    ci = ".list-group-item",
    hi = ".dropdown",
    ui = ".dropdown-item",
    fi = ".dropdown-toggle",
    di = "offset",
    pi = "position",
    mi = function () {
      function n(t, e) {
        var n = this;
        this._element = t, this._scrollElement = "BODY" === t.tagName ? window : t, this._config = this._getConfig(e), this._selector = this._config.target + " " + ai + "," + this._config.target + " " + ci + "," + this._config.target + " " + ui, this._offsets = [], this._targets = [], this._activeTarget = null, this._scrollHeight = 0, p(this._scrollElement).on(ni.SCROLL, function (t) {
          return n._process(t)
        }), this.refresh(), this._process()
      }
      var t = n.prototype;
      return t.refresh = function () {
        var e = this,
          t = this._scrollElement === this._scrollElement.window ? di : pi,
          o = "auto" === this._config.method ? t : this._config.method,
          r = o === pi ? this._getScrollTop() : 0;
        this._offsets = [], this._targets = [], this._scrollHeight = this._getScrollHeight(), [].slice.call(document.querySelectorAll(this._selector)).map(function (t) {
          var e, n = m.getSelectorFromElement(t);
          if (n && (e = document.querySelector(n)), e) {
            var i = e.getBoundingClientRect();
            if (i.width || i.height) return [p(e)[o]().top + r, n]
          }
          return null
        }).filter(function (t) {
          return t
        }).sort(function (t, e) {
          return t[0] - e[0]
        }).forEach(function (t) {
          e._offsets.push(t[0]), e._targets.push(t[1])
        })
      }, t.dispose = function () {
        p.removeData(this._element, Jn), p(this._scrollElement).off(Zn), this._element = null, this._scrollElement = null, this._config = null, this._selector = null, this._offsets = null, this._targets = null, this._activeTarget = null, this._scrollHeight = null
      }, t._getConfig = function (t) {
        if ("string" != typeof (t = l({}, ti, "object" == typeof t && t ? t : {})).target) {
          var e = p(t.target).attr("id");
          e || (e = m.getUID(Gn), p(t.target).attr("id", e)), t.target = "#" + e
        }
        return m.typeCheckConfig(Gn, t, ei), t
      }, t._getScrollTop = function () {
        return this._scrollElement === window ? this._scrollElement.pageYOffset : this._scrollElement.scrollTop
      }, t._getScrollHeight = function () {
        return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight)
      }, t._getOffsetHeight = function () {
        return this._scrollElement === window ? window.innerHeight : this._scrollElement.getBoundingClientRect().height
      }, t._process = function () {
        var t = this._getScrollTop() + this._config.offset,
          e = this._getScrollHeight(),
          n = this._config.offset + e - this._getOffsetHeight();
        if (this._scrollHeight !== e && this.refresh(), n <= t) {
          var i = this._targets[this._targets.length - 1];
          this._activeTarget !== i && this._activate(i)
        } else {
          if (this._activeTarget && t < this._offsets[0] && 0 < this._offsets[0]) return this._activeTarget = null, void this._clear();
          for (var o = this._offsets.length; o--;) {
            this._activeTarget !== this._targets[o] && t >= this._offsets[o] && ("undefined" == typeof this._offsets[o + 1] || t < this._offsets[o + 1]) && this._activate(this._targets[o])
          }
        }
      }, t._activate = function (e) {
        this._activeTarget = e, this._clear();
        var t = this._selector.split(",").map(function (t) {
            return t + '[data-target="' + e + '"],' + t + '[href="' + e + '"]'
          }),
          n = p([].slice.call(document.querySelectorAll(t.join(","))));
        n.hasClass(ii) ? (n.closest(hi).find(fi).addClass(oi), n.addClass(oi)) : (n.addClass(oi), n.parents(si).prev(ai + ", " + ci).addClass(oi), n.parents(si).prev(li).children(ai).addClass(oi)), p(this._scrollElement).trigger(ni.ACTIVATE, {
          relatedTarget: e
        })
      }, t._clear = function () {
        [].slice.call(document.querySelectorAll(this._selector)).filter(function (t) {
          return t.classList.contains(oi)
        }).forEach(function (t) {
          return t.classList.remove(oi)
        })
      }, n._jQueryInterface = function (e) {
        return this.each(function () {
          var t = p(this).data(Jn);
          if (t || (t = new n(this, "object" == typeof e && e), p(this).data(Jn, t)), "string" == typeof e) {
            if ("undefined" == typeof t[e]) throw new TypeError('No method named "' + e + '"');
            t[e]()
          }
        })
      }, s(n, null, [{
        key: "VERSION",
        get: function () {
          return "4.2.1"
        }
      }, {
        key: "Default",
        get: function () {
          return ti
        }
      }]), n
    }();
  p(window).on(ni.LOAD_DATA_API, function () {
    for (var t = [].slice.call(document.querySelectorAll(ri)), e = t.length; e--;) {
      var n = p(t[e]);
      mi._jQueryInterface.call(n, n.data())
    }
  }), p.fn[Gn] = mi._jQueryInterface, p.fn[Gn].Constructor = mi, p.fn[Gn].noConflict = function () {
    return p.fn[Gn] = $n, mi._jQueryInterface
  };
  var gi = "bs.tab",
    _i = "." + gi,
    vi = p.fn.tab,
    yi = {
      HIDE: "hide" + _i,
      HIDDEN: "hidden" + _i,
      SHOW: "show" + _i,
      SHOWN: "shown" + _i,
      CLICK_DATA_API: "click" + _i + ".data-api"
    },
    Ei = "dropdown-menu",
    bi = "active",
    wi = "disabled",
    Ti = "fade",
    Ci = "show",
    Si = ".dropdown",
    Di = ".nav, .list-group",
    Ii = ".active",
    Ai = "> li > .active",
    Oi = '[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]',
    Ni = ".dropdown-toggle",
    ki = "> .dropdown-menu .active",
    Li = function () {
      function i(t) {
        this._element = t
      }
      var t = i.prototype;
      return t.show = function () {
        var n = this;
        if (!(this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && p(this._element).hasClass(bi) || p(this._element).hasClass(wi))) {
          var t, i, e = p(this._element).closest(Di)[0],
            o = m.getSelectorFromElement(this._element);
          if (e) {
            var r = "UL" === e.nodeName || "OL" === e.nodeName ? Ai : Ii;
            i = (i = p.makeArray(p(e).find(r)))[i.length - 1]
          }
          var s = p.Event(yi.HIDE, {
              relatedTarget: this._element
            }),
            a = p.Event(yi.SHOW, {
              relatedTarget: i
            });
          if (i && p(i).trigger(s), p(this._element).trigger(a), !a.isDefaultPrevented() && !s.isDefaultPrevented()) {
            o && (t = document.querySelector(o)), this._activate(this._element, e);
            var l = function () {
              var t = p.Event(yi.HIDDEN, {
                  relatedTarget: n._element
                }),
                e = p.Event(yi.SHOWN, {
                  relatedTarget: i
                });
              p(i).trigger(t), p(n._element).trigger(e)
            };
            t ? this._activate(t, t.parentNode, l) : l()
          }
        }
      }, t.dispose = function () {
        p.removeData(this._element, gi), this._element = null
      }, t._activate = function (t, e, n) {
        var i = this,
          o = (!e || "UL" !== e.nodeName && "OL" !== e.nodeName ? p(e).children(Ii) : p(e).find(Ai))[0],
          r = n && o && p(o).hasClass(Ti),
          s = function () {
            return i._transitionComplete(t, o, n)
          };
        if (o && r) {
          var a = m.getTransitionDurationFromElement(o);
          p(o).removeClass(Ci).one(m.TRANSITION_END, s).emulateTransitionEnd(a)
        } else s()
      }, t._transitionComplete = function (t, e, n) {
        if (e) {
          p(e).removeClass(bi);
          var i = p(e.parentNode).find(ki)[0];
          i && p(i).removeClass(bi), "tab" === e.getAttribute("role") && e.setAttribute("aria-selected", !1)
        }
        if (p(t).addClass(bi), "tab" === t.getAttribute("role") && t.setAttribute("aria-selected", !0), m.reflow(t), p(t).addClass(Ci), t.parentNode && p(t.parentNode).hasClass(Ei)) {
          var o = p(t).closest(Si)[0];
          if (o) {
            var r = [].slice.call(o.querySelectorAll(Ni));
            p(r).addClass(bi)
          }
          t.setAttribute("aria-expanded", !0)
        }
        n && n()
      }, i._jQueryInterface = function (n) {
        return this.each(function () {
          var t = p(this),
            e = t.data(gi);
          if (e || (e = new i(this), t.data(gi, e)), "string" == typeof n) {
            if ("undefined" == typeof e[n]) throw new TypeError('No method named "' + n + '"');
            e[n]()
          }
        })
      }, s(i, null, [{
        key: "VERSION",
        get: function () {
          return "4.2.1"
        }
      }]), i
    }();
  p(document).on(yi.CLICK_DATA_API, Oi, function (t) {
    t.preventDefault(), Li._jQueryInterface.call(p(this), "show")
  }), p.fn.tab = Li._jQueryInterface, p.fn.tab.Constructor = Li, p.fn.tab.noConflict = function () {
    return p.fn.tab = vi, Li._jQueryInterface
  };
  var Pi = "toast",
    xi = "bs.toast",
    Hi = "." + xi,
    ji = p.fn[Pi],
    Ri = {
      CLICK_DISMISS: "click.dismiss" + Hi,
      HIDE: "hide" + Hi,
      HIDDEN: "hidden" + Hi,
      SHOW: "show" + Hi,
      SHOWN: "shown" + Hi
    },
    Fi = "fade",
    Mi = "hide",
    Wi = "show",
    Ui = "showing",
    Bi = {
      animation: "boolean",
      autohide: "boolean",
      delay: "number"
    },
    qi = {
      animation: !0,
      autohide: !0,
      delay: 500
    },
    Ki = '[data-dismiss="toast"]',
    Qi = function () {
      function i(t, e) {
        this._element = t, this._config = this._getConfig(e), this._timeout = null, this._setListeners()
      }
      var t = i.prototype;
      return t.show = function () {
        var t = this;
        p(this._element).trigger(Ri.SHOW), this._config.animation && this._element.classList.add(Fi);
        var e = function () {
          t._element.classList.remove(Ui), t._element.classList.add(Wi), p(t._element).trigger(Ri.SHOWN), t._config.autohide && t.hide()
        };
        if (this._element.classList.remove(Mi), this._element.classList.add(Ui), this._config.animation) {
          var n = m.getTransitionDurationFromElement(this._element);
          p(this._element).one(m.TRANSITION_END, e).emulateTransitionEnd(n)
        } else e()
      }, t.hide = function (t) {
        var e = this;
        this._element.classList.contains(Wi) && (p(this._element).trigger(Ri.HIDE), t ? this._close() : this._timeout = setTimeout(function () {
          e._close()
        }, this._config.delay))
      }, t.dispose = function () {
        clearTimeout(this._timeout), this._timeout = null, this._element.classList.contains(Wi) && this._element.classList.remove(Wi), p(this._element).off(Ri.CLICK_DISMISS), p.removeData(this._element, xi), this._element = null, this._config = null
      }, t._getConfig = function (t) {
        return t = l({}, qi, p(this._element).data(), "object" == typeof t && t ? t : {}), m.typeCheckConfig(Pi, t, this.constructor.DefaultType), t
      }, t._setListeners = function () {
        var t = this;
        p(this._element).on(Ri.CLICK_DISMISS, Ki, function () {
          return t.hide(!0)
        })
      }, t._close = function () {
        var t = this,
          e = function () {
            t._element.classList.add(Mi), p(t._element).trigger(Ri.HIDDEN)
          };
        if (this._element.classList.remove(Wi), this._config.animation) {
          var n = m.getTransitionDurationFromElement(this._element);
          p(this._element).one(m.TRANSITION_END, e).emulateTransitionEnd(n)
        } else e()
      }, i._jQueryInterface = function (n) {
        return this.each(function () {
          var t = p(this),
            e = t.data(xi);
          if (e || (e = new i(this, "object" == typeof n && n), t.data(xi, e)), "string" == typeof n) {
            if ("undefined" == typeof e[n]) throw new TypeError('No method named "' + n + '"');
            e[n](this)
          }
        })
      }, s(i, null, [{
        key: "VERSION",
        get: function () {
          return "4.2.1"
        }
      }, {
        key: "DefaultType",
        get: function () {
          return Bi
        }
      }]), i
    }();
  p.fn[Pi] = Qi._jQueryInterface, p.fn[Pi].Constructor = Qi, p.fn[Pi].noConflict = function () {
      return p.fn[Pi] = ji, Qi._jQueryInterface
    },
    function () {
      if ("undefined" == typeof p) throw new TypeError("Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript.");
      var t = p.fn.jquery.split(" ")[0].split(".");
      if (t[0] < 2 && t[1] < 9 || 1 === t[0] && 9 === t[1] && t[2] < 1 || 4 <= t[0]) throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0")
    }(), t.Util = m, t.Alert = g, t.Button = k, t.Carousel = at, t.Collapse = Tt, t.Dropdown = ze, t.Modal = pn, t.Popover = zn, t.Scrollspy = mi, t.Tab = Li, t.Toast = Qi, t.Tooltip = Hn, Object.defineProperty(t, "__esModule", {
      value: !0
    })
});
//# sourceMappingURL=bootstrap.bundle.min.js.map
/*
 * metismenu - v2.7.0
 * A jQuery menu plugin
 * https://github.com/onokumus/metismenu#readme
 *
 * Made by Osman Nuri Okumus <onokumus@gmail.com> (https://github.com/onokumus)
 * Under MIT License
 */

! function (a, b) {
  if ("function" == typeof define && define.amd) define(["jquery"], b);
  else if ("undefined" != typeof exports) b(require("jquery"));
  else {
    var c = {
      exports: {}
    };
    b(a.jquery), a.metisMenu = c.exports
  }
}(this, function (a) {
  "use strict";

  function b(a) {
    return a && a.__esModule ? a : {
      default: a
    }
  }

  function c(a, b) {
    if (!(a instanceof b)) throw new TypeError("Cannot call a class as a function")
  }
  var d = (b(a), "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (a) {
      return typeof a
    } : function (a) {
      return a && "function" == typeof Symbol && a.constructor === Symbol && a !== Symbol.prototype ? "symbol" : typeof a
    }),
    e = function (a) {
      function b() {
        return {
          bindType: f.end,
          delegateType: f.end,
          handle: function (b) {
            if (a(b.target).is(this)) return b.handleObj.handler.apply(this, arguments)
          }
        }
      }

      function c() {
        if (window.QUnit) return !1;
        var a = document.createElement("mm");
        for (var b in g)
          if (void 0 !== a.style[b]) return {
            end: g[b]
          };
        return !1
      }

      function d(b) {
        var c = this,
          d = !1;
        return a(this).one(h.TRANSITION_END, function () {
          d = !0
        }), setTimeout(function () {
          d || h.triggerTransitionEnd(c)
        }, b), this
      }

      function e() {
        f = c(), a.fn.emulateTransitionEnd = d, h.supportsTransitionEnd() && (a.event.special[h.TRANSITION_END] = b())
      }
      var f = !1,
        g = {
          WebkitTransition: "webkitTransitionEnd",
          MozTransition: "transitionend",
          OTransition: "oTransitionEnd otransitionend",
          transition: "transitionend"
        },
        h = {
          TRANSITION_END: "mmTransitionEnd",
          triggerTransitionEnd: function (b) {
            a(b).trigger(f.end)
          },
          supportsTransitionEnd: function () {
            return Boolean(f)
          }
        };
      return e(), h
    }(jQuery);
  (function (a) {
    var b = "metisMenu",
      f = "metisMenu",
      g = "." + f,
      h = ".data-api",
      i = a.fn[b],
      j = 350,
      k = {
        toggle: !0,
        preventDefault: !0,
        activeClass: "active",
        collapseClass: "collapse",
        collapseInClass: "in",
        collapsingClass: "collapsing",
        triggerElement: "a",
        parentTrigger: "li",
        subMenu: "ul"
      },
      l = {
        SHOW: "show" + g,
        SHOWN: "shown" + g,
        HIDE: "hide" + g,
        HIDDEN: "hidden" + g,
        CLICK_DATA_API: "click" + g + h
      },
      m = function () {
        function b(a, d) {
          c(this, b), this._element = a, this._config = this._getConfig(d), this._transitioning = null, this.init()
        }
        return b.prototype.init = function () {
          var b = this;
          a(this._element).find(this._config.parentTrigger + "." + this._config.activeClass).has(this._config.subMenu).children(this._config.subMenu).attr("aria-expanded", !0).addClass(this._config.collapseClass + " " + this._config.collapseInClass), a(this._element).find(this._config.parentTrigger).not("." + this._config.activeClass).has(this._config.subMenu).children(this._config.subMenu).attr("aria-expanded", !1).addClass(this._config.collapseClass), a(this._element).find(this._config.parentTrigger).has(this._config.subMenu).children(this._config.triggerElement).on(l.CLICK_DATA_API, function (c) {
            var d = a(this),
              e = d.parent(b._config.parentTrigger),
              f = e.siblings(b._config.parentTrigger).children(b._config.triggerElement),
              g = e.children(b._config.subMenu);
            b._config.preventDefault && c.preventDefault(), "true" !== d.attr("aria-disabled") && (e.hasClass(b._config.activeClass) ? (d.attr("aria-expanded", !1), b._hide(g)) : (b._show(g), d.attr("aria-expanded", !0), b._config.toggle && f.attr("aria-expanded", !1)), b._config.onTransitionStart && b._config.onTransitionStart(c))
          })
        }, b.prototype._show = function (b) {
          if (!this._transitioning && !a(b).hasClass(this._config.collapsingClass)) {
            var c = this,
              d = a(b),
              f = a.Event(l.SHOW);
            if (d.trigger(f), !f.isDefaultPrevented()) {
              d.parent(this._config.parentTrigger).addClass(this._config.activeClass), this._config.toggle && this._hide(d.parent(this._config.parentTrigger).siblings().children(this._config.subMenu + "." + this._config.collapseInClass).attr("aria-expanded", !1)), d.removeClass(this._config.collapseClass).addClass(this._config.collapsingClass).height(0), this.setTransitioning(!0);
              var g = function () {
                d.removeClass(c._config.collapsingClass).addClass(c._config.collapseClass + " " + c._config.collapseInClass).height("").attr("aria-expanded", !0), c.setTransitioning(!1), d.trigger(l.SHOWN)
              };
              return e.supportsTransitionEnd() ? void d.height(d[0].scrollHeight).one(e.TRANSITION_END, g).emulateTransitionEnd(j) : void g()
            }
          }
        }, b.prototype._hide = function (b) {
          if (!this._transitioning && a(b).hasClass(this._config.collapseInClass)) {
            var c = this,
              d = a(b),
              f = a.Event(l.HIDE);
            if (d.trigger(f), !f.isDefaultPrevented()) {
              d.parent(this._config.parentTrigger).removeClass(this._config.activeClass), d.height(d.height())[0].offsetHeight, d.addClass(this._config.collapsingClass).removeClass(this._config.collapseClass).removeClass(this._config.collapseInClass), this.setTransitioning(!0);
              var g = function () {
                c._transitioning && c._config.onTransitionEnd && c._config.onTransitionEnd(), c.setTransitioning(!1), d.trigger(l.HIDDEN), d.removeClass(c._config.collapsingClass).addClass(c._config.collapseClass).attr("aria-expanded", !1)
              };
              return e.supportsTransitionEnd() ? void(0 == d.height() || "none" == d.css("display") ? g() : d.height(0).one(e.TRANSITION_END, g).emulateTransitionEnd(j)) : void g()
            }
          }
        }, b.prototype.setTransitioning = function (a) {
          this._transitioning = a
        }, b.prototype.dispose = function () {
          a.removeData(this._element, f), a(this._element).find(this._config.parentTrigger).has(this._config.subMenu).children(this._config.triggerElement).off("click"), this._transitioning = null, this._config = null, this._element = null
        }, b.prototype._getConfig = function (b) {
          return b = a.extend({}, k, b)
        }, b._jQueryInterface = function (c) {
          return this.each(function () {
            var e = a(this),
              g = e.data(f),
              h = a.extend({}, k, e.data(), "object" === ("undefined" == typeof c ? "undefined" : d(c)) && c);
            if (!g && /dispose/.test(c) && this.dispose(), g || (g = new b(this, h), e.data(f, g)), "string" == typeof c) {
              if (void 0 === g[c]) throw new Error('No method named "' + c + '"');
              g[c]()
            }
          })
        }, b
      }();
    return a.fn[b] = m._jQueryInterface, a.fn[b].Constructor = m, a.fn[b].noConflict = function () {
      return a.fn[b] = i, m._jQueryInterface
    }, m
  })(jQuery)
});
//# sourceMappingURL=metisMenu.js.map
/*! Copyright (c) 2011 Piotr Rochala (http://rocha.la)
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * Version: 1.3.8
 *
 */
(function ($) {

  $.fn.extend({
    slimScroll: function (options) {

      var defaults = {

        // width in pixels of the visible scroll area
        width: 'auto',

        // height in pixels of the visible scroll area
        height: '250px',

        // width in pixels of the scrollbar and rail
        size: '7px',

        // scrollbar color, accepts any hex/color value
        color: '#000',

        // scrollbar position - left/right
        position: 'right',

        // distance in pixels between the side edge and the scrollbar
        distance: '1px',

        // default scroll position on load - top / bottom / $('selector')
        start: 'top',

        // sets scrollbar opacity
        opacity: .4,

        // enables always-on mode for the scrollbar
        alwaysVisible: false,

        // check if we should hide the scrollbar when user is hovering over
        disableFadeOut: false,

        // sets visibility of the rail
        railVisible: false,

        // sets rail color
        railColor: '#333',

        // sets rail opacity
        railOpacity: .2,

        // whether  we should use jQuery UI Draggable to enable bar dragging
        railDraggable: true,

        // defautlt CSS class of the slimscroll rail
        railClass: 'slimScrollRail',

        // defautlt CSS class of the slimscroll bar
        barClass: 'slimScrollBar',

        // defautlt CSS class of the slimscroll wrapper
        wrapperClass: 'slimScrollDiv',

        // check if mousewheel should scroll the window if we reach top/bottom
        allowPageScroll: false,

        // scroll amount applied to each mouse wheel step
        wheelStep: 20,

        // scroll amount applied when user is using gestures
        touchScrollStep: 200,

        // sets border radius
        borderRadius: '7px',

        // sets border radius of the rail
        railBorderRadius: '7px'
      };

      var o = $.extend(defaults, options);

      // do it for every element that matches selector
      this.each(function () {

        var isOverPanel, isOverBar, isDragg, queueHide, touchDif,
          barHeight, percentScroll, lastScroll,
          divS = '<div></div>',
          minBarHeight = 30,
          releaseScroll = false;

        // used in event handlers and for better minification
        var me = $(this);

        // ensure we are not binding it again
        if (me.parent().hasClass(o.wrapperClass)) {
          // start from last bar position
          var offset = me.scrollTop();

          // find bar and rail
          bar = me.siblings('.' + o.barClass);
          rail = me.siblings('.' + o.railClass);

          getBarHeight();

          // check if we should scroll existing instance
          if ($.isPlainObject(options)) {
            // Pass height: auto to an existing slimscroll object to force a resize after contents have changed
            if ('height' in options && options.height == 'auto') {
              me.parent().css('height', 'auto');
              me.css('height', 'auto');
              var height = me.parent().parent().height();
              me.parent().css('height', height);
              me.css('height', height);
            } else if ('height' in options) {
              var h = options.height;
              me.parent().css('height', h);
              me.css('height', h);
            }

            if ('scrollTo' in options) {
              // jump to a static point
              offset = parseInt(o.scrollTo);
            } else if ('scrollBy' in options) {
              // jump by value pixels
              offset += parseInt(o.scrollBy);
            } else if ('destroy' in options) {
              // remove slimscroll elements
              bar.remove();
              rail.remove();
              me.unwrap();
              return;
            }

            // scroll content by the given offset
            scrollContent(offset, false, true);
          }

          return;
        } else if ($.isPlainObject(options)) {
          if ('destroy' in options) {
            return;
          }
        }

        // optionally set height to the parent's height
        o.height = (o.height == 'auto') ? me.parent().height() : o.height;

        // wrap content
        var wrapper = $(divS)
          .addClass(o.wrapperClass)
          .css({
            position: 'relative',
            overflow: 'hidden',
            width: o.width,
            height: o.height
          });

        // update style for the div
        me.css({
          overflow: 'hidden',
          width: o.width,
          height: o.height
        });

        // create scrollbar rail
        var rail = $(divS)
          .addClass(o.railClass)
          .css({
            width: o.size,
            height: '100%',
            position: 'absolute',
            top: 0,
            display: (o.alwaysVisible && o.railVisible) ? 'block' : 'none',
            'border-radius': o.railBorderRadius,
            background: o.railColor,
            opacity: o.railOpacity,
            zIndex: 90
          });

        // create scrollbar
        var bar = $(divS)
          .addClass(o.barClass)
          .css({
            background: o.color,
            width: o.size,
            position: 'absolute',
            top: 0,
            opacity: o.opacity,
            display: o.alwaysVisible ? 'block' : 'none',
            'border-radius': o.borderRadius,
            BorderRadius: o.borderRadius,
            MozBorderRadius: o.borderRadius,
            WebkitBorderRadius: o.borderRadius,
            zIndex: 99
          });

        // set position
        var posCss = (o.position == 'right') ? {
          right: o.distance
        } : {
          left: o.distance
        };
        rail.css(posCss);
        bar.css(posCss);

        // wrap it
        me.wrap(wrapper);

        // append to parent div
        me.parent().append(bar);
        me.parent().append(rail);

        // make it draggable and no longer dependent on the jqueryUI
        if (o.railDraggable) {
          bar.bind("mousedown", function (e) {
            var $doc = $(document);
            isDragg = true;
            t = parseFloat(bar.css('top'));
            pageY = e.pageY;

            $doc.bind("mousemove.slimscroll", function (e) {
              currTop = t + e.pageY - pageY;
              bar.css('top', currTop);
              scrollContent(0, bar.position().top, false); // scroll content
            });

            $doc.bind("mouseup.slimscroll", function (e) {
              isDragg = false;
              hideBar();
              $doc.unbind('.slimscroll');
            });
            return false;
          }).bind("selectstart.slimscroll", function (e) {
            e.stopPropagation();
            e.preventDefault();
            return false;
          });
        }

        // on rail over
        rail.hover(function () {
          showBar();
        }, function () {
          hideBar();
        });

        // on bar over
        bar.hover(function () {
          isOverBar = true;
        }, function () {
          isOverBar = false;
        });

        // show on parent mouseover
        me.hover(function () {
          isOverPanel = true;
          showBar();
          hideBar();
        }, function () {
          isOverPanel = false;
          hideBar();
        });

        // support for mobile
        me.bind('touchstart', function (e, b) {
          if (e.originalEvent.touches.length) {
            // record where touch started
            touchDif = e.originalEvent.touches[0].pageY;
          }
        });

        me.bind('touchmove', function (e) {
          // prevent scrolling the page if necessary
          if (!releaseScroll) {
            e.originalEvent.preventDefault();
          }
          if (e.originalEvent.touches.length) {
            // see how far user swiped
            var diff = (touchDif - e.originalEvent.touches[0].pageY) / o.touchScrollStep;
            // scroll content
            scrollContent(diff, true);
            touchDif = e.originalEvent.touches[0].pageY;
          }
        });

        // set up initial height
        getBarHeight();

        // check start position
        if (o.start === 'bottom') {
          // scroll content to bottom
          bar.css({
            top: me.outerHeight() - bar.outerHeight()
          });
          scrollContent(0, true);
        } else if (o.start !== 'top') {
          // assume jQuery selector
          scrollContent($(o.start).position().top, null, true);

          // make sure bar stays hidden
          if (!o.alwaysVisible) {
            bar.hide();
          }
        }

        // attach scroll events
        attachWheel(this);

        function _onWheel(e) {
          // use mouse wheel only when mouse is over
          if (!isOverPanel) {
            return;
          }

          var e = e || window.event;

          var delta = 0;
          if (e.wheelDelta) {
            delta = -e.wheelDelta / 120;
          }
          if (e.detail) {
            delta = e.detail / 3;
          }

          var target = e.target || e.srcTarget || e.srcElement;
          if ($(target).closest('.' + o.wrapperClass).is(me.parent())) {
            // scroll content
            scrollContent(delta, true);
          }

          // stop window scroll
          if (e.preventDefault && !releaseScroll) {
            e.preventDefault();
          }
          if (!releaseScroll) {
            e.returnValue = false;
          }
        }

        function scrollContent(y, isWheel, isJump) {
          releaseScroll = false;
          var delta = y;
          var maxTop = me.outerHeight() - bar.outerHeight();

          if (isWheel) {
            // move bar with mouse wheel
            delta = parseInt(bar.css('top')) + y * parseInt(o.wheelStep) / 100 * bar.outerHeight();

            // move bar, make sure it doesn't go out
            delta = Math.min(Math.max(delta, 0), maxTop);

            // if scrolling down, make sure a fractional change to the
            // scroll position isn't rounded away when the scrollbar's CSS is set
            // this flooring of delta would happened automatically when
            // bar.css is set below, but we floor here for clarity
            delta = (y > 0) ? Math.ceil(delta) : Math.floor(delta);

            // scroll the scrollbar
            bar.css({
              top: delta + 'px'
            });
          }

          // calculate actual scroll amount
          percentScroll = parseInt(bar.css('top')) / (me.outerHeight() - bar.outerHeight());
          delta = percentScroll * (me[0].scrollHeight - me.outerHeight());

          if (isJump) {
            delta = y;
            var offsetTop = delta / me[0].scrollHeight * me.outerHeight();
            offsetTop = Math.min(Math.max(offsetTop, 0), maxTop);
            bar.css({
              top: offsetTop + 'px'
            });
          }

          // scroll content
          me.scrollTop(delta);

          // fire scrolling event
          me.trigger('slimscrolling', ~~delta);

          // ensure bar is visible
          showBar();

          // trigger hide when scroll is stopped
          hideBar();
        }

        function attachWheel(target) {
          if (window.addEventListener) {
            target.addEventListener('DOMMouseScroll', _onWheel, false);
            target.addEventListener('mousewheel', _onWheel, false);
          } else {
            document.attachEvent("onmousewheel", _onWheel)
          }
        }

        function getBarHeight() {
          // calculate scrollbar height and make sure it is not too small
          barHeight = Math.max((me.outerHeight() / me[0].scrollHeight) * me.outerHeight(), minBarHeight);
          bar.css({
            height: barHeight + 'px'
          });

          // hide scrollbar if content is not long enough
          var display = barHeight == me.outerHeight() ? 'none' : 'block';
          bar.css({
            display: display
          });
        }

        function showBar() {
          // recalculate bar height
          getBarHeight();
          clearTimeout(queueHide);

          // when bar reached top or bottom
          if (percentScroll == ~~percentScroll) {
            //release wheel
            releaseScroll = o.allowPageScroll;

            // publish approporiate event
            if (lastScroll != percentScroll) {
              var msg = (~~percentScroll == 0) ? 'top' : 'bottom';
              me.trigger('slimscroll', msg);
            }
          } else {
            releaseScroll = false;
          }
          lastScroll = percentScroll;

          // show only when required
          if (barHeight >= me.outerHeight()) {
            //allow window scroll
            releaseScroll = true;
            return;
          }
          bar.stop(true, true).fadeIn('fast');
          if (o.railVisible) {
            rail.stop(true, true).fadeIn('fast');
          }
        }

        function hideBar() {
          // only hide when options allow it
          if (!o.alwaysVisible) {
            queueHide = setTimeout(function () {
              if (!(o.disableFadeOut && isOverPanel) && !isOverBar && !isDragg) {
                bar.fadeOut('slow');
                rail.fadeOut('slow');
              }
            }, 1000);
          }
        }

      });

      // maintain chainability
      return this;
    }
  });

  $.fn.extend({
    slimscroll: $.fn.slimScroll
  });

})(jQuery);
! function (t, e) {
  "use strict";
  "function" == typeof define && define.amd ? define([], function () {
    return t.Waves = e.call(t), t.Waves
  }) : "object" == typeof exports ? module.exports = e.call(t) : t.Waves = e.call(t)
}("object" == typeof global ? global : this, function () {
  "use strict";

  function t(t) {
    return null !== t && t === t.window
  }

  function e(e) {
    return t(e) ? e : 9 === e.nodeType && e.defaultView
  }

  function n(t) {
    var e = typeof t;
    return "function" === e || "object" === e && !!t
  }

  function o(t) {
    return n(t) && t.nodeType > 0
  }

  function a(t) {
    var e = f.call(t);
    return "[object String]" === e ? d(t) : n(t) && /^\[object (Array|HTMLCollection|NodeList|Object)\]$/.test(e) && t.hasOwnProperty("length") ? t : o(t) ? [t] : []
  }

  function i(t) {
    var n, o, a = {
        top: 0,
        left: 0
      },
      i = t && t.ownerDocument;
    return n = i.documentElement, void 0 !== t.getBoundingClientRect && (a = t.getBoundingClientRect()), o = e(i), {
      top: a.top + o.pageYOffset - n.clientTop,
      left: a.left + o.pageXOffset - n.clientLeft
    }
  }

  function r(t) {
    var e = "";
    for (var n in t) t.hasOwnProperty(n) && (e += n + ":" + t[n] + ";");
    return e
  }

  function s(t, e, n) {
    if (n) {
      n.classList.remove("waves-rippling");
      var o = n.getAttribute("data-x"),
        a = n.getAttribute("data-y"),
        i = n.getAttribute("data-scale"),
        s = n.getAttribute("data-translate"),
        u = 350 - (Date.now() - Number(n.getAttribute("data-hold")));
      u < 0 && (u = 0), "mousemove" === t.type && (u = 150);
      var c = "mousemove" === t.type ? 2500 : v.duration;
      setTimeout(function () {
        var t = {
          top: a + "px",
          left: o + "px",
          opacity: "0",
          "-webkit-transition-duration": c + "ms",
          "-moz-transition-duration": c + "ms",
          "-o-transition-duration": c + "ms",
          "transition-duration": c + "ms",
          "-webkit-transform": i + " " + s,
          "-moz-transform": i + " " + s,
          "-ms-transform": i + " " + s,
          "-o-transform": i + " " + s,
          transform: i + " " + s
        };
        n.setAttribute("style", r(t)), setTimeout(function () {
          try {
            e.removeChild(n)
          } catch (t) {
            return !1
          }
        }, c)
      }, u)
    }
  }

  function u(t) {
    if (!1 === h.allowEvent(t)) return null;
    for (var e = null, n = t.target || t.srcElement; n.parentElement;) {
      if (!(n instanceof SVGElement) && n.classList.contains("waves-effect")) {
        e = n;
        break
      }
      n = n.parentElement
    }
    return e
  }

  function c(t) {
    var e = u(t);
    if (null !== e) {
      if (e.disabled || e.getAttribute("disabled") || e.classList.contains("disabled")) return;
      if (h.registerEvent(t), "touchstart" === t.type && v.delay) {
        var n = !1,
          o = setTimeout(function () {
            o = null, v.show(t, e)
          }, v.delay),
          a = function (a) {
            o && (clearTimeout(o), o = null, v.show(t, e)), n || (n = !0, v.hide(a, e)), r()
          },
          i = function (t) {
            o && (clearTimeout(o), o = null), a(t), r()
          };
        e.addEventListener("touchmove", i, !1), e.addEventListener("touchend", a, !1), e.addEventListener("touchcancel", a, !1);
        var r = function () {
          e.removeEventListener("touchmove", i), e.removeEventListener("touchend", a), e.removeEventListener("touchcancel", a)
        }
      } else v.show(t, e), m && (e.addEventListener("touchend", v.hide, !1), e.addEventListener("touchcancel", v.hide, !1)), e.addEventListener("mouseup", v.hide, !1), e.addEventListener("mouseleave", v.hide, !1)
    }
  }
  var l = l || {},
    d = document.querySelectorAll.bind(document),
    f = Object.prototype.toString,
    m = "ontouchstart" in window,
    v = {
      duration: 750,
      delay: 200,
      show: function (t, e, n) {
        if (2 === t.button) return !1;
        e = e || this;
        var o = document.createElement("div");
        o.className = "waves-ripple waves-rippling", e.appendChild(o);
        var a = i(e),
          s = 0,
          u = 0;
        "touches" in t && t.touches.length ? (s = t.touches[0].pageY - a.top, u = t.touches[0].pageX - a.left) : (s = t.pageY - a.top, u = t.pageX - a.left), u = u >= 0 ? u : 0, s = s >= 0 ? s : 0;
        var c = "scale(" + e.clientWidth / 100 * 3 + ")",
          l = "translate(0,0)";
        n && (l = "translate(" + n.x + "px, " + n.y + "px)"), o.setAttribute("data-hold", Date.now()), o.setAttribute("data-x", u), o.setAttribute("data-y", s), o.setAttribute("data-scale", c), o.setAttribute("data-translate", l);
        var d = {
          top: s + "px",
          left: u + "px"
        };
        o.classList.add("waves-notransition"), o.setAttribute("style", r(d)), o.classList.remove("waves-notransition"), d["-webkit-transform"] = c + " " + l, d["-moz-transform"] = c + " " + l, d["-ms-transform"] = c + " " + l, d["-o-transform"] = c + " " + l, d.transform = c + " " + l, d.opacity = "1";
        var f = "mousemove" === t.type ? 2500 : v.duration;
        d["-webkit-transition-duration"] = f + "ms", d["-moz-transition-duration"] = f + "ms", d["-o-transition-duration"] = f + "ms", d["transition-duration"] = f + "ms", o.setAttribute("style", r(d))
      },
      hide: function (t, e) {
        for (var n = (e = e || this).getElementsByClassName("waves-rippling"), o = 0, a = n.length; o < a; o++) s(t, e, n[o]);
        m && (e.removeEventListener("touchend", v.hide), e.removeEventListener("touchcancel", v.hide)), e.removeEventListener("mouseup", v.hide), e.removeEventListener("mouseleave", v.hide)
      }
    },
    p = {
      input: function (t) {
        var e = t.parentNode;
        if ("i" !== e.tagName.toLowerCase() || !e.classList.contains("waves-effect")) {
          var n = document.createElement("i");
          n.className = t.className + " waves-input-wrapper", t.className = "waves-button-input", e.replaceChild(n, t), n.appendChild(t);
          var o = window.getComputedStyle(t, null),
            a = o.color,
            i = o.backgroundColor;
          n.setAttribute("style", "color:" + a + ";background:" + i), t.setAttribute("style", "background-color:rgba(0,0,0,0);")
        }
      },
      img: function (t) {
        var e = t.parentNode;
        if ("i" !== e.tagName.toLowerCase() || !e.classList.contains("waves-effect")) {
          var n = document.createElement("i");
          e.replaceChild(n, t), n.appendChild(t)
        }
      }
    },
    h = {
      touches: 0,
      allowEvent: function (t) {
        var e = !0;
        return /^(mousedown|mousemove)$/.test(t.type) && h.touches && (e = !1), e
      },
      registerEvent: function (t) {
        var e = t.type;
        "touchstart" === e ? h.touches += 1 : /^(touchend|touchcancel)$/.test(e) && setTimeout(function () {
          h.touches && (h.touches -= 1)
        }, 500)
      }
    };
  return l.init = function (t) {
    var e = document.body;
    "duration" in (t = t || {}) && (v.duration = t.duration), "delay" in t && (v.delay = t.delay), m && (e.addEventListener("touchstart", c, !1), e.addEventListener("touchcancel", h.registerEvent, !1), e.addEventListener("touchend", h.registerEvent, !1)), e.addEventListener("mousedown", c, !1)
  }, l.attach = function (t, e) {
    t = a(t), "[object Array]" === f.call(e) && (e = e.join(" ")), e = e ? " " + e : "";
    for (var n, o, i = 0, r = t.length; i < r; i++) o = (n = t[i]).tagName.toLowerCase(), -1 !== ["input", "img"].indexOf(o) && (p[o](n), n = n.parentElement), -1 === n.className.indexOf("waves-effect") && (n.className += " waves-effect" + e)
  }, l.ripple = function (t, e) {
    var n = (t = a(t)).length;
    if (e = e || {}, e.wait = e.wait || 0, e.position = e.position || null, n)
      for (var o, r, s, u = {}, c = 0, l = {
          type: "mousedown",
          button: 1
        }; c < n; c++)
        if (o = t[c], r = e.position || {
            x: o.clientWidth / 2,
            y: o.clientHeight / 2
          }, s = i(o), u.x = s.left + r.x, u.y = s.top + r.y, l.pageX = u.x, l.pageY = u.y, v.show(l, o), e.wait >= 0 && null !== e.wait) {
          var d = {
            type: "mouseup",
            button: 1
          };
          setTimeout(function (t, e) {
            return function () {
              v.hide(t, e)
            }
          }(d, o), e.wait)
        }
  }, l.calm = function (t) {
    for (var e = {
        type: "mouseup",
        button: 1
      }, n = 0, o = (t = a(t)).length; n < o; n++) v.hide(e, t[n])
  }, l.displayEffect = function (t) {
    l.init(t)
  }, l
});
//# sourceMappingURL=waves.min.js.map
/*
 Template Name: Veltrix - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 Website: www.themesbrand.com
 File: Main js
 */


! function ($) {
    "use strict";

    var MainApp = function () {
        this.$body = $("body"),
            this.$wrapper = $("#wrapper"),
            this.$btnFullScreen = $("#btn-fullscreen"),
            this.$leftMenuButton = $('.button-menu-mobile'),
            this.$menuItem = $('.has_sub > a')
    };

    MainApp.prototype.intSlimscrollmenu = function () {
        $('.slimscroll-menu').slimscroll({
            height: 'auto',
            position: 'right',
            size: "5px",
            color: '#9ea5ab',
            wheelStep: 5,
            touchScrollStep: 50
        });
    },
        MainApp.prototype.initSlimscroll = function () {
            $('.slimscroll').slimscroll({
                height: 'auto',
                position: 'right',
                size: "5px",
                color: '#9ea5ab',
                touchScrollStep: 50
            });
        },

        MainApp.prototype.initMetisMenu = function () {
            //metis menu
            $("#side-menu").metisMenu();
        },

        MainApp.prototype.initLeftMenuCollapse = function () {
            // Left menu collapse
            $('.button-menu-mobile').on('click', function (event) {
                event.preventDefault();
                $("body").toggleClass("enlarged");
            });
        },

        MainApp.prototype.initEnlarge = function () {
            if ($(window).width() < 1025) {
                $('body').addClass('enlarged');
            } else {
                $('body').removeClass('enlarged');
            }
        },

        MainApp.prototype.initActiveMenu = function () {
            // === following js will activate the menu in left side bar based on url ====
            $("#sidebar-menu a").each(function () {
                var pageUrl = window.location.href.split(/[?#]/)[0];
                if (this.href == pageUrl) {
                    $(this).addClass("active");
                    $(this).parent().addClass("active"); // add active to li of the current link
                    $(this).parent().parent().addClass("in");
                    $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
                    $(this).parent().parent().parent().addClass("active");
                    $(this).parent().parent().parent().parent().addClass("in"); // add active to li of the current link
                    $(this).parent().parent().parent().parent().parent().addClass("active");
                }
            });
        },

        MainApp.prototype.initComponents = function () {
            $('[data-toggle="tooltip"]').tooltip();
            $('[data-toggle="popover"]').popover();
        },

        //full screen
        MainApp.prototype.initFullScreen = function () {
            var $this = this;
            $this.$btnFullScreen.on("click", function (e) {
                e.preventDefault();

                if (!document.fullscreenElement && /* alternative standard method */ !document.mozFullScreenElement && !document.webkitFullscreenElement) { // current working methods
                    if (document.documentElement.requestFullscreen) {
                        document.documentElement.requestFullscreen();
                    } else if (document.documentElement.mozRequestFullScreen) {
                        document.documentElement.mozRequestFullScreen();
                    } else if (document.documentElement.webkitRequestFullscreen) {
                        document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                    }
                } else {
                    if (document.cancelFullScreen) {
                        document.cancelFullScreen();
                    } else if (document.mozCancelFullScreen) {
                        document.mozCancelFullScreen();
                    } else if (document.webkitCancelFullScreen) {
                        document.webkitCancelFullScreen();
                    }
                }
            });
        },



        MainApp.prototype.init = function () {
            this.intSlimscrollmenu();
            this.initSlimscroll();
            this.initMetisMenu();
            this.initLeftMenuCollapse();
            this.initEnlarge();
            this.initActiveMenu();
            this.initComponents();
            this.initFullScreen();
            Waves.init();
        },

        //init
        $.MainApp = new MainApp, $.MainApp.Constructor = MainApp
}(window.jQuery),

    //initializing
    function ($) {
        "use strict";
        $.MainApp.init();
    }(window.jQuery);

$(document).ready(function () {
    $('.valor').mask('000.000.000.000.000,00', { reverse: true });
});